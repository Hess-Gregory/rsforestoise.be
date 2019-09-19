<?php

namespace AppBundle\EventListener;

use Doctrine\ORM\EntityManager;
use Symfony\Component\Routing\RouterInterface;

use Presta\SitemapBundle\Service\SitemapListenerInterface;
use Presta\SitemapBundle\Event\SitemapPopulateEvent;
use Presta\SitemapBundle\Sitemap\Url\UrlConcrete;
use Symfony\Component\Validator\Constraints\DateTime;

class SitemapListener implements SitemapListenerInterface
{	  	
    private $event;
    private $router;
    private $entityManager;

    public function __construct(RouterInterface $router, EntityManager $entityManager)
    {
        $this->router = $router;
        $this->entityManager = $entityManager;
    }

    public function populateSitemap(SitemapPopulateEvent $event)
    {
        $this->event = $event;

        $section = $this->event->getSection();

        if (is_null($section) || $section == 'default') {

            // Pages
            $pages = $this->entityManager->getRepository('AppBundle:Page')->findAll();

            foreach ($pages as $page) {

                if (!is_null($page->getSeo())) {

                    $url = $this->router->generate($page->getRoutingName(), array(), true);

                    $this->createSiteMapEntry(
                        $url,
                        new \DateTime(),
                        UrlConcrete::CHANGEFREQ_WEEKLY,
                        1.0
                    );
                }

            }

            // Actualités
            $actualities = $this->entityManager->getRepository('AppBundle:Actuality')->findAll();

            foreach ($actualities as $actuality) {

                $url = $this->router->generate('front_end_actuality_default', array(
                	'slug' => $actuality->getSlug()
                ), true);

                $this->createSiteMapEntry(
                    $url,
                    $actuality->getUpdatedAt(),
                    UrlConcrete::CHANGEFREQ_DAILY,
                    0.9
                );
            }

            // Team - Young
            $teams = $this->entityManager->getRepository('AppBundle:Team')->findAllTeamsYoungByName();

            foreach ($teams as $team) {

                $url = $this->router->generate('front_end_team_young_description', array(
                    'slug' => $team->getSlug()
                ), true);

                $this->createSiteMapEntry(
                    $url,
                    $team->getUpdatedAt(),
                    UrlConcrete::CHANGEFREQ_WEEKLY,
                    0.8
                );
            }

            // Team - First
            $teams = $this->entityManager->getRepository('AppBundle:Team')->findAllTeamsFirstByName();

            foreach ($teams as $team) {

                $url = $this->router->generate('front_end_team_first_description', array(
                    'slug' => $team->getSlug()
                ), true);

                $this->createSiteMapEntry(
                    $url,
                    $team->getUpdatedAt(),
                    UrlConcrete::CHANGEFREQ_WEEKLY,
                    0.8
                );
            }
        }
    }

    private function createSiteMapEntry($url, $modifiedDate, $changeFrequency, $priority)
    {
        $this->event->getGenerator()->addUrl(
            new UrlConcrete(
                $url,
                $modifiedDate,
                $changeFrequency,
                $priority
            ),
            'default'
        );
    }
}
<?php
namespace AppBundle\Services;

use Oneup\UploaderBundle\Event\PostPersistEvent;
use Oneup\UploaderBundle\Event\PreUploadEvent;

use AppBundle\Entity\Actuality;
use AppBundle\Entity\Picture;

class UploadListener
{
    protected $originalName;

    public function __construct($doctrine)
    {
        $this->doctrine = $doctrine;
    }

    public function preUpload(PreUploadEvent $event)
    {
        $this->originalName = $event->getFile()->getClientOriginalName();
    }

    public function onUpload(PostPersistEvent $event)
    {   
        $response = $event->getResponse();
        $em = $this->doctrine->getManager();
        $request = $event->getRequest();

        $actualityId = $request->get('actualityId');
        $actuality = ($actualityId !== null) ? $em->getRepository('AppBundle:Actuality')->find($actualityId) : null;

        $teamId = $request->get('teamId');
        $team = ($teamId !== null) ? $em->getRepository('AppBundle:Team')->find($teamId) : null;

        $playerId = $request->get('playerId');
        $player = ($playerId !== null) ? $em->getRepository('AppBundle:Player')->find($playerId) : null;

        $committeeId = $request->get('committeeId');
        $committee = ($committeeId !== null) ? $em->getRepository('AppBundle:Committee')->find($committeeId) : null;

        $teamStaffId = $request->get('teamStaffId');
        $teamStaff = ($teamStaffId !== null) ? $em->getRepository('AppBundle:TeamStaff')->find($teamStaffId) : null;

        $file = $event->getFile();

        $picture = new Picture;

        ($actuality !== null) ? $picture->setActuality($actuality) : null;

        ($team !== null) ? $picture->setTeam($team) : null;

        ($player !== null) ? $picture->setPlayer($player) : null;

        ($committee !== null) ? $picture->setCommittee($committee) : null;

        ($teamStaff !== null) ? $picture->setTeamStaff($teamStaff) : null;

        $picture->setName($file->getBasename());
        $picture->setFileType($file->getMimeType());
        $picture->setOriginalName($this->originalName);
        
        $em->persist($picture);
        $em->flush();   
    }
}
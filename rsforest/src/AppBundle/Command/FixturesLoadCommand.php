<?php
namespace AppBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\ArrayInput;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;


class FixturesLoadCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this
            ->setName('fixtures:load')
            ->setDescription('Meta : Drop DB / Create DB / Update Schema / Load Fixtures')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        // Drop DB
        $dropDatabase = $this->getApplication()->find('doctrine:database:drop');

        $arguments = array(
            'command' => 'doctrine:database:drop',
            '--force' => true
        );

        $input = new ArrayInput($arguments);

        $dropDatabase->run($input, $output);


        //Make sure we close the original connection because it lost the reference to the database
        $connection = $this->getApplication()->getKernel()->getContainer()->get('doctrine')->getConnection();
         
        if ($connection->isConnected()) {
            $connection->close();
        }

        // Create DB
        $createDatabase = $this->getApplication()->find('doctrine:database:create');

        $arguments = array(
            'command' => 'doctrine:database:create'
        );

        $input = new ArrayInput($arguments);

        $createDatabase->run($input, $output);


        // Update Schema
        $updateSchema = $this->getApplication()->find('doctrine:schema:update');

        $arguments = array(
            'command' => 'doctrine:schema:update',
            '--force' => true
        );

        $input = new ArrayInput($arguments);

        $updateSchema->run($input, $output);


        // Load Fixtures
        $fixturesLoad = $this->getApplication()->find('doctrine:fixtures:load');

        $arguments = array(
            'command' => 'doctrine:fixtures:load',
            '--append' => true
        );

        $input = new ArrayInput($arguments);

        $fixturesLoad->run($input, $output);
    }
}
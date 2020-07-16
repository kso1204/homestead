<?php

/*
 * This file is part of the slince/composer-repository-manager package.
 *
 * (c) Slince <taosikai@yeah.net>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Slince\Crm\Command;

use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

class AddCommand extends Command
{
    /**
     * {@inheritdoc}
     */
    public function configure()
    {
        $this->setName('repo:add')
            ->setDescription('Creates a repository')
            ->addArgument('repository-name', InputArgument::REQUIRED, 'The repository name')
            ->addArgument('repository-url', InputArgument::REQUIRED, 'The repository url')
            ->addArgument('repository-location', InputArgument::OPTIONAL, 'The repository location');
    }

    /**
     * {@inheritdoc}
     */
    public function execute(InputInterface $input, OutputInterface $output)
    {
        $repositoryName = $input->getArgument('repository-name');
        $repositoryUrl = $input->getArgument('repository-url');
        $repositoryLocation = $input->getArgument('repository-location');
        //Add repository & dump to config file
        $this->repositoryManager->addRepository($repositoryName, $repositoryUrl, $repositoryLocation);

        $style = new SymfonyStyle($input, $output);
        $style->success("Add the repository [{$repositoryName}] success");
    }
}
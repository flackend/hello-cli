<?php

namespace Flack\Console\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class HelloCommand extends Command {

    /**
     * Configures the command. Sets the command name, description, arguments,
     * and options.
     */
    public function configure()
    {
        $this
            ->setName('hello')
            ->setDescription('Say hello to a person.')
            ->addOption('name', null, InputOption::VALUE_OPTIONAL, 'The name of the person to say hello to.', 'World');
    }

    /**
     * This is the "main" method of the command.
     *
     * @param InputInterface  $input
     * @param OutputInterface $output
     */
    public function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln("<comment>Hello, {$input->getOption('name')}!</comment>");
    }
}
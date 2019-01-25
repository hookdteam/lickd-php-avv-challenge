<?php

namespace App\Console;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Exception\LogicException;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class PriceCalculatorConsole extends Command
{
    /**
     * @var string
     */
    protected static $defaultName = 'price:calculator';


    protected function configure()
    {
        $this
        ->setDescription("Calculates the Price for a given YouTube Channel")
        ->addArgument('channelId', InputArgument::REQUIRED);

    }

    /**
     * Executes the current command.
     *
     * This method is not abstract because you can use this class
     * as a concrete class. In this case, instead of defining the
     * execute() method, you set the code to execute by passing
     * a Closure to the setCode() method.
     *
     * @return int|null null or 0 if everything went fine, or an error code
     *
     * @throws LogicException When this abstract method is not implemented
     *
     * @see setCode()
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        //@todo write your code here
    }
}

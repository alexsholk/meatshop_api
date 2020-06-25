<?php

namespace App\Command;

use App\Parser\XlsxParser;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

class ParseXlsxCommand extends Command
{
    const JSON_PATH = __DIR__ . '/../../data/json';
    const JSON_OPTIONS = JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE;

    protected static $defaultName = 'app:parse-xlsx';

    protected function configure()
    {
        $this
            ->setDescription('Parse Xlsx file')
            ->addArgument('file', InputArgument::REQUIRED, 'Xlsx file');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);
        $data = XlsxParser::parse($input->getArgument('file'));

        file_put_contents(
            self::JSON_PATH . '/categories.json',
            json_encode($data['categories'], self::JSON_OPTIONS)
        );

        file_put_contents(
            self::JSON_PATH . '/products.json',
            json_encode($data['products'], self::JSON_OPTIONS)
        );

        $io->success('Done');
        return 0;
    }
}

<?php

namespace Agungsugiarto\Commands;

use Agungsugiarto\Inspiring;
use CodeIgniter\CLI\BaseCommand;
use CodeIgniter\CLI\CLI;

/**
 * Class InstallCommand.
 */
class InspiringCommand extends BaseCommand
{
    /**
     * The group the command is lumped under
     * when listing commands.
     *
     * @var string
     */
    protected $group = 'inspiring';

    /**
     * The command's name.
     *
     * @var string
     */
    protected $name = 'inspire';

    /**
     * The command's short description.
     *
     * @var string
     */
    protected $description = 'Inspiring quotes for codeigniter4.';

    //--------------------------------------------------------------------

    /**
     * Displays the help for the spark cli script itself.
     *
     * @param array $params
     */
    public function run(array $params)
    {
        CLI::write(CLI::color(Inspiring::quote(), 'yellow'));
    }
}

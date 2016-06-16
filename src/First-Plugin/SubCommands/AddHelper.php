<?php
namespace First-Plugin\SubCommands;

use pocketmine\command\CommandSender;
use pocketmine\Player;
use pocketmine\utils\TextFormat;

class AddHelper extends SubCommands
{
    public function CanUse(CommandSender $sender) {
        return ($sender instanceof Player) and $sender->HasPermission("firstplugin.addhelper")
    }

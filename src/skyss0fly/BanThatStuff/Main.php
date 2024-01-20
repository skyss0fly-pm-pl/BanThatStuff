<?php

namespace skyss0fly\BanThatStuff;

use pocketmine\{plugin\PluginBase, event\player\PlayerChatEvent, player\Player};

class Main extends PluginBase {


  const $cfg = $this->getConfig();
  const $words = $cfg("BannedWords");
  const $items = $cfg("BannedItems");

  public function onLoad(): void {
   $this->getLogger()->info("Welcome to BanThatStuff \nThis is A Quick Guide to Usage: \nCommands: \n/banitem : Allows you to Ban the Item Held in your hand or By inputting the Id as an Arg \n/banword : Allows you to ban A Word. e.g /banword noob \nPlugin Constructed by skyss0fly");
  }

public function OnChat(PlayerChatEvent $event) {
  $word = $event->getMessage();
  if ($word === $words) {
    $event->cancel();
    $plr = $event->getPlayer();
    $plr->SendMessage("Thats a Banned Word!");
  }

}

}

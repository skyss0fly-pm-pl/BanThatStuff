<?php

namespace skyss0fly\BanThatStuff;

use pocketmine\{plugin\PluginBase, command\Command, command\CommandSender, item\VanillaItems, event\player\PlayerChatEvent, event\player\PlayerInteractEvent, player\Player};

class Main extends PluginBase {


  public const CONFIG_NAME =  "config.yml";
  private $cfg;
  private $words;
private $items;

public function onEnable() {
    $this->saveDefaultConfig();
    $this->cfg = $this->getConfig();
    $this->words = $cfg->get("BannedWords");
    $this->items = $cfg->get("BannedItems");
}
  public function onLoad(): void {
   $this->getLogger()->info("Welcome to BanThatStuff \nThis is A Quick Guide to Usage: \nCommands: \n/banitem : Allows you to Ban the Item Held in your hand or By inputting the Id as an Arg \n/banword : Allows you to ban A Word. e.g /banword noob \nCommands Coming Soon, Please Manually input the Ids and Words for now! \nPlugin Constructed by skyss0fly");
  }


public function OnChat(PlayerChatEvent $event) {
  $word = $event->getMessage();
  if ($word === $words) {
    if ($plr = $event->getPlayer()->hasPermission("BanThatStuff.bypass")) {

      # non
    }
      else {
      
    $event->cancel();
    $plr = $event->getPlayer();
    $plr->SendMessage("Thats a Banned Word!");
  }
  }
  else {
    # null
  }
  

}

  public function onUse(PlayerInteractEvent $event) {
$plr = $event->getPlayer();
    $handitem = $plr->getItem();

    if (VanillaItems($item->getId()) === $items) {
      if ($plr = $event->getPlayer()->hasPermission("BanThatStuff.bypass")) {

      # non 
      }
        else {
        
      $event->cancel();
      $plr->sendMessage("That Item is Banned! Remove it Now!");
      }
    }
      else {
# null
      }
  }

  
    
            
    public function onCommand(CommandSender $sender, Command $command, string $label, array $args): bool {
        if (!$sender instanceof Player) {
            $this->getLogger()->warning("Please use this command in-game");
            return false;
        }

        

        switch ($command->getName()) {
            case "banitem":
          $sender->sendMessage("Coming Soon. Please Manually Input the Ids in config");
            #   if ($args[1] = 0) {
                 
       #    $sender->sendMessage("Error: Please input an Id!");
      #    }
     #     else {
      #      $itemid = $args[1];
        #    $items()->write($args[1]);
       #     $sender->sendMessage("Successfully Banned The Item: " . VanillaItems()->GetItem($args[1])->name());

        
# }
switch ($command->getName()) {
            case "banword":
          $sender->sendMessage("Coming Soon. Please Manually Input the Word in Config!");
        }
    }
    }

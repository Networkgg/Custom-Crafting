<?php

namespace CC;

use pocketmine\plugin\PluginBase
use pocketmine\server

use pocketmine\inventory\BigShapelessRecipe
use pocketmine\inventory\ShapelessRecipe

 class ShapelessRecipe implements Recipe{
  
      public function onEnable(){
        $this->getLogger()->info("CC has been Enabled!");
      }

     public function addIngredient(Item $item){
      if(count($this->ingredients) >= 9){
    throw new \InvalidArgumentException("Shapeless recipes cannot have more than 9 ingredients");

    public function onDisable(){
        $this->getLogger()->info("CC has been Disabled!");
    }
}

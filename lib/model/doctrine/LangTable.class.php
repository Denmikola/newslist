<?php

/**
 * LangTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class LangTable extends Doctrine_Table
{
    /**
     * Returns an instance of this class.
     *
     * @return object LangTable
     */
    public function getLangs()
    {
        $q = $this->createQuery('l')
        ->orderby('id');
        return $q->execute();
    }

   public function SetupDef($lid)
     {  
        $langs=Doctrine_Core::getTable('lang')->getLangs();
        foreach ($langs as $lang):
          if($lang->getId()==$lid):
            $lang->setDef(True)->save();
          else:
            $lang->setDef(False)->save();
          endif;
         endforeach;
       }


    public static function getInstance()
    {
        return Doctrine_Core::getTable('Lang');
    }
}
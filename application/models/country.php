 <?php
 
 class Country extends Eloquent {
 	public functions languages()
 	{
 		return $this->has_many('Language');
 	}
 }
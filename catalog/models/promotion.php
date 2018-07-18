<?php
	class Promotion
	{
		private $id;
		private $image;

		public function setImage($url_image) {
			$this->image = $url_image;
		}

		public function getImage() {
			return $this->image;
		}

		public function save() {
			if (PromotionDAO::save($this)) {
				return true;
			} else {
				return false;
			}
		}

		public static function make_thumb($src, $dest) {

			/* read the source image */
			$source_image = imagecreatefromjpeg($src);
			$width = imagesx($source_image);
			$height = imagesy($source_image);

			$desired_width = floor($width * 0.3);
			$desired_height = floor($height * 0.3);
			
			/* create a new, "virtual" image */
			$virtual_image = imagecreatetruecolor($desired_width, $desired_height);
			
			/* copy source image at a resized size */
			imagecopyresampled($virtual_image, $source_image, 0, 0, 0, 0, 
				$desired_width, $desired_height, $width, $height);
			
			/* create the physical thumbnail image to its destination */
			imagejpeg($virtual_image, $dest);
		}
	}
?>
<?php
	namespace Application\Theme\Factorian;
	use Concrete\Core\Page\Theme\Theme;
	class PageTheme extends Theme {
		protected $pThemeGridFrameworkHandle = 'bootstrap3';
		
		public function getThemeName() {
			return t('Factorian');
		}

		public function getThemeDescription() {
			return t('...');
		}
	}
?>
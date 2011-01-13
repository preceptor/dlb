<?php
class Preceptor_View_Helper_PrintHeadline
{
	/**
     * @var Zend_View_Interface
     */
    public $view;
    
	public function printHeadline( $layout , $data )
	{
		$xhtml = "<div id='headline'>";
		
		switch( $layout )
		{
			case 1:
				$xhtml .= "<div class='yui-gb'>";
					$xhtml .= "<div class='yui-u first text'>";
						$xhtml .= "<h2><a href='". $this->view->url ."/content/view/id/" . $data['headline']->id . "'>" . $data['headline']->title . "</a></h2>";
						$xhtml .= "<p><a href='". $this->view->url ."/content/view/id/" . $data['headline']->id . "'>" . $data['headline']->call . "</a></p>";
					$xhtml .= "</div>";
					$xhtml .= "<div class='yui-u thumb'>";
						$xhtml .= $this->view->image( "../upload/" . $this->view->printImage( $data['photo']->ds , "thumb_medium_" ) );
					$xhtml .= "</div>";
					$xhtml .= "<div class='yui-u text'>";
					
					foreach( $data['featured'] as $rs )
					{
						$xhtml .= "<div class='featured'>";
							$xhtml .= "<h3><a href='". $this->view->url ."/content/view/id/" . $rs->id . "'>" . $rs->title . "</a></h3>";
						$xhtml .= "</div>";
					}
						$xhtml .= "<div class='featured-more'><a href='". $this->view->url ."/content/index/id/-2'>Mais</a></div>";
					$xhtml .= "</div>";
				$xhtml .= "</div>";
			break;
			case 2:
				$xhtml .= "<div class='yui-gd'>";
					$xhtml .= "<div class='yui-u first text'>";
						$xhtml .= "<h2><a href='". $this->view->url ."/content/view/id/" . $data['headline']->id . "'>" . $data['headline']->title . "</a></h2>";
						$xhtml .= "<p><a href='". $this->view->url ."/content/view/id/" . $data['headline']->id . "'>" . $data['headline']->call . "</a></p>";
					$xhtml .= "</div>";
					$xhtml .= "<div class='yui-u thumb'>";
						$xhtml .= $this->view->image( "../upload/" . $this->view->printImage( $data['photo']->ds , "_" ) );
					$xhtml .= "</div>";
				$xhtml .= "</div>";
			break;
			case 3:
				$xhtml .= "<div class='thumb'>";
					$xhtml .= $this->view->image( "../upload/" . $this->view->printImage( $data['photo']->ds , "_" ) );
					$xhtml .= "<p><a href='". $this->view->url ."/content/view/id/" . $data['headline']->id . "'>". $data['photo']->call ."</p>";
				$xhtml .= "</div>";
			break;
		}
		$xhtml.= "</div>";
		
		return $xhtml;
	}
	
	/**
     * Set the view object
     *
     * @param Zend_View_Interface $view
     * @return void
     */
    public function setView(Zend_View_Interface $view)
    {
        $this->view = $view;
    }
}
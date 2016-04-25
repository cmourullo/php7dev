<?php
interface Render {
	public function getHeader();
	public function getBody();
	public function getFooter();
	public function getRendering();
}
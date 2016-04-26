<?php

/**
 * Interface Render
 */
interface Render {
	/**
	 * @return mixed
     */
	public function getHeader();

	/**
	 * @return mixed
     */
	public function getBody();

	/**
	 * @return mixed
     */
	public function getFooter();

	/**
	 * @return mixed
     */
	public function getRendering();
}
<?php 
interface model
{
	public function save();
	public function delete();
	public function SelectById($Id);
	public function ListAll();
}
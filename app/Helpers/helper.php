<?php 

use App\models\SamplesTypeModel;
use App\models\CategoryModel;
use App\models\TestTypeModel;
use App\models\UserModel;

class helper
{
	public static function getSample($id)
	{
		if ($id!=0)
		{
			return SamplesTypeModel::find($id);
		}
		else
		{
			return SamplesTypeModel::all();
		}
	}

	public static function getCategories($id)
	{
		if ($id!=0)
		{
			return CategoryModel::find($id);
		}
		else
		{
			return CategoryModel::all();
		}
	}

	public static function getTest($id)
	{
		if ($id!=0)
		{
			return TestTypeModel::find($id);
		}
		else
		{
			return TestTypeModel::all();
		}
	}

	public static function getUsers($id)
	{
		if ($id!=0)
		{
			return UserModel::find($id);
		}
		else
		{
			return UserModel::all();
		}
	}
}
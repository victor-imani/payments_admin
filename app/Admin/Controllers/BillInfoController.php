<?php

namespace App\Admin\Controllers;

use App\Models\BillInfo;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class BillInfoController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'BillInfo';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new BillInfo());
        $grid->Column('id', "ID");
        $grid->Column('brand_name', "Brand Name");
        $grid->Column('brand_logo', "Brand Logo");
        $grid->Column('due', "Due");
        $grid->Column('due_info', "Due Info");
        $grid->Column('brand_id', "Brand Id");
        $grid->Column('due_date', "Due Date");
        $grid->Column('status', "Status");



        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(BillInfo::findOrFail($id));



        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new BillInfo());
        $form->text('brand_name', "Brand Name");
        $form->image('brand_logo', "Brand Logo");
        $form->number('due', "Due");
        $form->text('due_info', "Due Info");
        $form->number('brand_id', "Brand Id");
        $form->date('due_date', "Due Date");
        $form->number('status', "Status");



        return $form;
    }
}

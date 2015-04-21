<?php
namespace Chocolate\View\Helper;

use \Cake\View\Helper\FormHelper;
use \Cake\View\View;

class BootstrapFormHelper extends FormHelper
{

    protected $_defaultConfig = [
        'errorClass' => 'form-error',
        'typeMap' => [
            'string' => 'text', 'datetime' => 'datetime', 'boolean' => 'checkbox',
            'timestamp' => 'datetime', 'text' => 'textarea', 'time' => 'time',
            'date' => 'date', 'float' => 'number', 'integer' => 'number',
            'decimal' => 'number', 'binary' => 'file', 'uuid' => 'string'
        ],
        'templates' => [
            'button' => '<button{{attrs}}>{{text}}</button>',
            'checkbox' => '<input type="checkbox" name="{{name}}" value="{{value}}"{{attrs}}>',
            'checkboxFormGroup' => '{{label}}',
            'checkboxWrapper' => '<div class="checkbox">{{label}}</div>',
            'errorList' => '<ul>{{content}}</ul>',
            'errorItem' => '<li>{{text}}</li>',
            'file' => '<input type="file" name="{{name}}"{{attrs}}>',
            'fieldset' => '<fieldset>{{content}}</fieldset>',
            'formStart' => '<form{{attrs}}>',
            'formEnd' => '</form>',
            'formGroup' => '{{label}}{{input}}',
            'hiddenBlock' => '<div style="display:none;">{{content}}</div>',
            'input' => '<input type="{{type}}" name="{{name}}"{{attrs}}>',
            'inputSubmit' => '<input type="{{type}}"{{attrs}}>',
            'label' => '<label{{attrs}}>{{text}}</label>',
            'nestingLabel' => '{{hidden}}<label{{attrs}}>{{input}}{{text}}</label>',
            'legend' => '<legend>{{text}}</legend>',
            'option' => '<option value="{{value}}"{{attrs}}>{{text}}</option>',
            'optgroup' => '<optgroup label="{{label}}"{{attrs}}>{{content}}</optgroup>',
            'select' => '<select name="{{name}}"{{attrs}}>{{content}}</select>',
            'selectMultiple' => '<select name="{{name}}[]" multiple="multiple"{{attrs}}>{{content}}</select>',
            'radio' => '<input type="radio" name="{{name}}" value="{{value}}"{{attrs}}>',
            'radioWrapper' => '{{label}}',
            'textarea' => '<textarea name="{{name}}"{{attrs}}>{{value}}</textarea>',

            'dateWidget' => '<div class="row">
                <div class="col-sm-3">{{year}}</div>
                <div class="col-sm-3">{{month}}</div>
                <div class="col-sm-3">{{day}}</div>
                <div class="col-sm-3">{{hour}}</div>
                <div class="col-sm-3">{{minute}}</div>
                <div class="col-sm-3">{{second}}</div>
                <div class="col-sm-3">{{meridian}}</div>
            </div>',
            'error' => '<div class="help-block">{{content}}</div>',
            'submitContainer' => '{{content}}',
            'inputContainer' => '<div class="form-group {{type}}{{required}}">{{content}}</div>',
            'inputContainerError' => '<div class="form-group has-error has-feedback {{type}}{{required}}">{{content}}<span class="glyphicon glyphicon-warning-sign form-control-feedback"></span>{{error}}</div>',
        ]
    ];

    public function label($fieldName, $text = null, array $options = [])
    {
        $options = $this->addClass($options, 'control-label');

        return parent::label($fieldName, $text, $options);
    }

    protected function _getInput($fieldName, $options)
    {
        if (isset($options['type']) && !in_array($options['type'], ['radio', 'checkbox', 'datetime'])) {
            $options = $this->addClass($options, 'form-control');
        }

        return parent::_getInput($fieldName, $options);
    }

    public function submit($caption = null, array $options = [])
    {
        $options = $this->addClass($options, 'btn btn-default');

        return parent::submit($caption, $options);
    }

    public function button($title, array $options = array())
    {
        $options = $this->addClass($options, 'btn btn-default');

        return parent::button($title, $options);
    }

}

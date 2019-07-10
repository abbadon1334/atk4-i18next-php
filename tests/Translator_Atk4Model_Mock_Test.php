<?php

namespace I18Next\Tests;

use atk4\core\AppScopeTrait;
use atk4\core\ContainerTrait;
use atk4\core\Exception;
use atk4\core\InitializerTrait;
use atk4\data\Model;
use atk4\data\Persistence\Array_;
use I18Next\atk4\TranslatorI18NextTrait;

class Translator_Atk4Model_Test extends TranslatorBaseCase
{
    /** @var ATK4ModelMock */
    protected $model;

    /**
     * @throws \atk4\data\Exception
     */
    public function setUp(): void
    {
        parent::setUp();

        $a = [
            'user' => [
                1 => ['first_name' => 'John', 'last_name' => 'Smith', 'email' => 'john.smith@agiletoolkit.com'],
                2 => ['first_name' => 'Sarah', 'last_name' => 'Jones', 'email' => 'sara.jones@agiletoolkit.com'],
            ],
        ];

        $p           = new Array_($a);
        $this->model = new ATK4ModelMock($p, 'user');
    }

    public function test1()
    {
        $this->model->load(1);

        $this->setupTranslatorLanguages('it', 'en');

        $result = $this->translator->_('atk4_model', $this->model->data);
        $this->assertEquals('utente : John Smith con email : john.smith@agiletoolkit.com', $result);

        $result = $this->translator->_('atk4_model', $this->model->data, NULL, 'en');
        $this->assertEquals('user : John Smith with email : john.smith@agiletoolkit.com', $result);

        // using model as context is the same as atk4_model, because context added _ between $key and $context
        $result = $this->translator->_('atk4', $this->model->data, 'model', 'en');
        $this->assertEquals('user : John Smith with email : john.smith@agiletoolkit.com', $result);
    }

    public function test2()
    {
        $this->model->load(2);

        $this->setupTranslatorLanguages('it', 'en');

        $result = $this->translator->_('atk4_model_object', ['user' => $this->model->data]);
        $this->assertEquals('utente : Sarah Jones con email : sara.jones@agiletoolkit.com', $result);

        $result = $this->translator->_('atk4_model_object', ['user' => $this->model->get()]);
        $this->assertEquals('utente : Sarah Jones con email : sara.jones@agiletoolkit.com', $result);
    }

    public function test3()
    {
        $this->model->load(1);

        $this->setupTranslatorLanguages('it', 'en');

        $result = $this->translator->_('atk4_model_object2', [
            'user' => $this->model->get(),
            'address' => $this->model->load(2)->get()
        ]);
        $this->assertEquals('utente : John Smith con email : sara.jones@agiletoolkit.com', $result);
    }
}
// @codingStandardsIgnoreStart
class ATK4ModelMock extends Model {

    public function init()
    {
        parent::init();

        $this->addFields([
            'first_name',
            'last_name',
            'email',
        ]);
    }
}
// @codingStandardsIgnoreEnd

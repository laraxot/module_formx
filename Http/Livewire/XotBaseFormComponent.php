<?php

declare(strict_types=1);

namespace Modules\FormX\Http\Livewire;

/*
 * https://github.com/kdion4891/laravel-livewire-forms/blob/master/src/FormComponent.php.
 */

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Livewire\Component;
use Modules\FormX\Services\FieldService;
use Modules\FormX\Traits\FollowsRules;
use Modules\FormX\Traits\HandlesArrays;
use Modules\FormX\Traits\UploadsFiles;

//use Kdion4891\LaravelLivewireTables\Traits\ThanksYajra;

/**
 * Class XotBaseFormComponent.
 */
abstract class XotBaseFormComponent extends Component {
    use FollowsRules;
    use UploadsFiles;
    use HandlesArrays;

    /**
     * Undocumented variable.
     */
    public ?Model $model = null;

    public array $form_data = [];

    public array $daynames = [];

    private static string $storage_disk;

    private static string $storage_path;

    /**
     * @var string[]
     */
    protected $listeners = ['fileUpdate'];

    // @param mixed $model

    //*

    /**
     * Undocumented function.
     */
    public function mount(?Model $model = null): void {
        $this->setFormProperties($model);
        $this->setDaynames();
    }

    //*/

    public function setDaynames(): void {
        $this->daynames = [
            trans('formx::txt.day_names.sun'),
            trans('formx::txt.day_names.mon'),
            trans('formx::txt.day_names.tue'),
            trans('formx::txt.day_names.wed'),
            trans('formx::txt.day_names.thu'),
            trans('formx::txt.day_names.fri'),
            trans('formx::txt.day_names.sat'),
        ];
    }

    public function setFormProperties(?Model $model = null): void {
        $this->model = $model;
        if ($model) {
            $this->form_data = $model->toArray();
        }

        foreach ($this->fields() as $field) {
            if (! isset($this->form_data[$field->name])) {
                $array = in_array($field->type, ['checkbox', 'file']);
                $this->form_data[$field->name] = $field->default ?? ($array ? [] : null);
                if (Str::contains($field->name, '.')) {
                    [$rel,$rel_field] = explode('.', $field->name);

                    $rel_val = '';
                    try {
                        $rel_val = $this->model->$rel->$rel_field;
                    } catch (\Exception $e) {
                    }
                    $this->form_data[$field->name] = $rel_val;
                }
            }
        }
    }

    /**
     * Render the component.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function render() {
        return $this->formView();
    }

    /**
     * @return \Illuminate\Contracts\View\View
     */
    public function formView() {
        $view = 'formx::livewire.form';
        $view_params = [
            'view' => $view,
            'fields' => $this->fields(),
        ];

        return view()->make($view, $view_params);
    }

    public function fields(): array {
        return [
            FieldService::make('Name')->input()->rules(['required', 'string', 'max:255']),
            FieldService::make('Email')->input('email')->rules(['required', 'string', 'email', 'max:255', 'unique:users,email']),
            FieldService::make('Password')->input('password')->rules(['required', 'string', 'min:8', 'confirmed']),
            FieldService::make('Confirm Password', 'password_confirmation')->input('password'),
        ];
    }

    /**
     * @param string $field
     *
     * @return void
     */
    public function updated($field) {
        //$this->validateOnly($field, $this->rules(true));
    }

    public function submit(): void {
        //$this->validate($this->rules());
        dddx(['form_data' => $this->form_data]);
        $field_names = [];
        foreach ($this->fields() as $field) {
            $field_names[] = $field->name;
        }
        $this->form_data = Arr::only($this->form_data, $field_names);

        $this->success();
    }

    /**
     * @param string $message
     *
     * @return string|string[]
     */
    public function errorMessage($message) {
        return str_replace('form data.', '', $message);
    }

    public function success(): void {
        //$this->form_data['password'] = bcrypt($this->form_data['password']);
        //\App\User::create($this->form_data);
        dddx($this->form_data);
    }

    public function saveAndStay(): void {
        $this->submit();
        $this->saveAndStayResponse();
    }

    /**
     * @return \Illuminate\Http\RedirectResponse
     */
    public function saveAndStayResponse() {
        return redirect()->route('users.create');
    }

    public function saveAndGoBack(): void {
        $this->submit();
        $this->saveAndGoBackResponse();
    }

    /**
     * @return \Illuminate\Http\RedirectResponse
     */
    public function saveAndGoBackResponse() {
        return redirect()->route('users.index');
    }
}

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('name'), 'has-success': this.fields.name && this.fields.name.valid }">
    <label for="name" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.member.columns.name') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.name" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('name'), 'form-control-success': this.fields.name && this.fields.name.valid}" id="name" name="name" placeholder="{{ trans('admin.member.columns.name') }}">
        <div v-if="errors.has('name')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('name') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('surname'), 'has-success': this.fields.surname && this.fields.surname.valid }">
    <label for="surname" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.member.columns.surname') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.surname" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('surname'), 'form-control-success': this.fields.surname && this.fields.surname.valid}" id="surname" name="surname" placeholder="{{ trans('admin.member.columns.surname') }}">
        <div v-if="errors.has('surname')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('surname') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('email'), 'has-success': this.fields.email && this.fields.email.valid }">
    <label for="email" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.member.columns.email') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.email" v-validate="'required|email'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('email'), 'form-control-success': this.fields.email && this.fields.email.valid}" id="email" name="email" placeholder="{{ trans('admin.member.columns.email') }}">
        <div v-if="errors.has('email')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('email') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('birthday'), 'has-success': this.fields.birthday && this.fields.birthday.valid }">
    <label for="birthday" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.member.columns.birthday') }}</label>
    <div :class="isFormLocalized ? 'col-md-4' : 'col-sm-8'">
        <div class="input-group input-group--custom">
            <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
            <datetime v-model="form.birthday" :config="datePickerConfig" v-validate="'required|date_format:yyyy-MM-dd HH:mm:ss'" class="flatpickr" :class="{'form-control-danger': errors.has('birthday'), 'form-control-success': this.fields.birthday && this.fields.birthday.valid}" id="birthday" name="birthday" placeholder="{{ trans('brackets/admin-ui::admin.forms.select_a_date') }}"></datetime>
        </div>
        <div v-if="errors.has('birthday')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('birthday') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('department'), 'has-success': this.fields.department && this.fields.department.valid }">
    <label for="department" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.member.columns.department') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.department" v-validate="'required|integer'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('department'), 'form-control-success': this.fields.department && this.fields.department.valid}" id="department" name="department" placeholder="{{ trans('admin.member.columns.department') }}">
        <div v-if="errors.has('department')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('department') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('position'), 'has-success': this.fields.position && this.fields.position.valid }">
    <label for="position" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.member.columns.position') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.position" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('position'), 'form-control-success': this.fields.position && this.fields.position.valid}" id="position" name="position" placeholder="{{ trans('admin.member.columns.position') }}">
        <div v-if="errors.has('position')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('position') }}</div>
    </div>
</div>



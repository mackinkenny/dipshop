@extends('admin.index')

@section('admin_content')

    <form action="{{ route('property.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name_of_property">Название свойства</label>
            <input name="name" type="text" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" id="name_of_property" placeholder="Название свойства" value="{{ old('name') }}">
            @if($errors->has('name'))
                <span class="invalid-feedback" role="alert">
					<strong>{{ $errors->first('name') }}</strong>
				</span>
            @endif
        </div>
        <div class="form-group">
            <select name="category" id="category_property" class="form-control">
                @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name  }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Создать</button>
    </form>

@endsection
<form action="/itemupdate/{{$items->id}}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PATCH')
    <input type="text" name="name" value="{{$items->name}}"  class="sign_up_input_field w-full"><br>
    <input type="text" name="category" value="{{$items->category}}"   class="sign_up_input_field"><br> 
    <input type="text" name="price" value="{{$items->price}}"   class="sign_up_input_field"><br>
    <input type="file" name="image" accept="image/*" value={{$items->filename}} class="sign_up_input_field">
    <button type="submit">UPDATE</button>
</form>
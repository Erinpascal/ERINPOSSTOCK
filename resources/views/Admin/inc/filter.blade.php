<div class="container">


    <form action="">
    
 
 
    <div class="select-container">
      <select id="name">
        <option>{{\App\Constants\GlobalConstants::ALL}}</option>
        @foreach(\App\Constants\GlobalConstants::LIST_NAMES as $name)
        <option>{{ $name }}</option>
        @endforeach
      </select>
    </div>
    </form>
  </div>
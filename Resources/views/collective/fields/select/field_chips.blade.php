<style>
  .chip {
  display: inline-block;
  padding: 0 25px;
  height: 50px;
  font-size: 16px;
  line-height: 50px;
  border-radius: 25px;
  background-color: #d60021;
}

.chip img {
  float: left;
  margin: 0 10px 0 -25px;
  height: 50px;
  width: 50px;
  border-radius: 50%;
}

.closebtn {
  padding-left: 10px;
  color: #888;
  font-weight: bold;
  float: right;
  font-size: 20px;
  cursor: pointer;
}

.closebtn:hover {
  color: #000;
}

</style>
<div class="chip">
  <img src="img_avatar.jpg" alt="Person" width="96" height="96">
  John Doe
  <span class="closebtn" onclick="this.parentElement.style.display='none'">&times;</span>
</div>

@php
    //dddx(get_defined_vars());
    //dddx($_panel->row->{$name});
@endphp
@livewire('formx::chip.simple', ['row' => $_panel->row,'name' => $name])
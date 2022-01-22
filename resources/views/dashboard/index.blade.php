@extends('layouts.app')
@section('content')
    <br>
    <div>
        <div class="row white-text">
            <a href="/admins" class="white-text">
                <div class="mx-20 card-panel orange lighten-1 col s8 offset-s2 m4 offset-m2 l4 offset-l2 xl2 offset-xl1 ml-14">
                    <div class="row">
                        <div class="col s7 xl7">
                            <i class="material-icons medium white-text pt-5">person</i>
                            <h6 class="no-padding txt-md">Admins</h6>
                        </div>
                        <div class="col s5 xl5">
                            <p class="no-padding center mt txt-sm">Total({{$t_admins}})</p>
                        </div>
                    </div>
                </div>
            </a>
            <a href="/employees" class="white-text">
                <div class="mx-20 card-panel green lighten-1 col s8 offset-s2 m4 l4 xl2">
                    <div class="row">
                        <div class="col s7 xl7">
                            <i class="material-icons medium white-text pt-5">person_outline</i>
                            <h6 class="no-padding txt-md">Employees</h6>
                        </div>
                        <div class="col s5 xl5">
                            <p class="no-padding center mt txt-sm">Total({{$t_employees}})</p>
                        </div>
                    </div>
                </div>
            </a>
            <a href="/departments" class="white-text">
                <div class="mx-20 card-panel pink lighten-1 col s8 offset-s2 m4 offset-m2 l4 offset-l2 xl2">
                    <div class="row">
                        <div class="col s7 xl7">
                            <i class="material-icons medium white-text pt-5">business</i>
                            <h6 class="no-padding txt-md">Departments</h6>
                        </div>
                        <div class="col s5 xl5">
                            <p class="no-padding center mt txt-sm">Total({{$t_departments}})</p>
                        </div>
                    </div>
                </div>
            </a>
            <a href="/cities" class="white-text hide-on-small-only">
                <div class="mx-20 card-panel grey lighten-1 col s8 offset-s2 m4 l4 xl2">
                    <div class="row">
                        <div class="col s7 xl7">
                            <i class="material-icons medium white-text pt-5">location_city</i>
                            <h6 class="no-padding txt-md">Cities</h6>
                        </div>
                        <div class="col s5 xl5">
                            <p class="no-padding center mt txt-sm">Total({{$t_cities}})</p>
                        </div>
                    </div>
                </div>
            </a>
            <a href="/countries" class="white-text">
                <div class="mx-20 card-panel brown col s8 offset-s2 m4 offset-m2 l4 offset-l2 xl2 offset-xl1 ml-14">
                    <div class="row">
                        <div class="col s7 xl7">
                            <i class="material-icons medium white-text pt-5">terrain</i>
                            <h6 class="no-padding txt-md">Countries</h6>
                        </div>
                        <div class="col s5 xl5">
                            <p class="no-padding center mt txt-sm">Total({{$t_countries}})</p>
                        </div>
                    </div>
                </div>
            </a>
            <a href="/salaries" class="white-text hide-on-small-only">
                <div class="card-panel black col s8 offset-s2 m4 l4 xl2 mx-20">
                    <div class="row">
                        <div class="col s7 xl7">
                            <i class="material-icons medium white-text pt-5">attach_money</i>
                            <h6 class="no-padding txt-md">Salaries</h6>
                        </div>
                        <div class="col s5 xl5">
                            <p class="no-padding center mt txt-sm">Total({{$t_salaries}})</p>
                        </div>
                    </div>
                </div>
            </a>
            <a href="/states" class="white-text hide-on-small-only">
                <div class="card-panel blue col s8 offset-s2 m4 offset-m2 l4 offset-l2 xl2 mx-20">
                    <div class="row">
                        <div class="col s7 xl7">
                            <i class="material-icons medium white-text pt-5">grid_on</i>
                            <h6 class="no-padding txt-md">States</h6>
                        </div>
                        <div class="col s5 xl5">
                            <p class="no-padding center mt txt-sm">Total({{$t_states}})</p>
                        </div>
                    </div>
                </div>
            </a>
            <a href="/divisions" class="white-text hide-on-small-only">
                <div class="mx-20 card-panel red col s8 offset-s2 m4 l4 xl2">
                    <div class="row">
                        <div class="col s7 xl7">
                            <i class="material-icons medium white-text pt-5">business</i>
                            <h6 class="no-padding txt-md">Divisions</h6>
                        </div>
                        <div class="col s5 xl5">
                            <p class="no-padding center mt txt-sm">Total({{$t_divisions}})</p>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>
   
 
@endsection
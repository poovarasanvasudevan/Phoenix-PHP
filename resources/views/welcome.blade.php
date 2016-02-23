@extends("components.layout")

@section("contents")

    <div class="card">
        <div class="toolbar">

        </div>
    </div>


    <div class="login-box" ng-controller="logincontroller">

        <form name="login-form" ng-submit="submit()" id="login-form" method="post"
              class="col-md-4 md-padding col-md-offset-4">

            {!! Html::image("img/logo.png","logo",["class"=>"center-block img-responsive","disabled"=>"disabled"]) !!}
            <br/>
            <md-card class="md-margin marginL20 marginR20">
                <md-card-content class="md-padding">
                    <lx-text-field label="Email or Abyasi Id" fixed-label="true" icon="account">
                        <input type="text" ng-model="input.username" required>
                    </lx-text-field>
                    <lx-text-field label="Password" fixed-label="true" icon="eye">
                        <input type="password" ng-model="input.password" required>
                    </lx-text-field>
                    <div class="md-padding">
                        <div class="checkbox marginL20 pull-left" style="margin-top: 5px;">
                            <input type="checkbox" id="checkbox1" ng-model="input.rememberme" class="checkbox__input">
                            <label for="checkbox1" class="checkbox__label">Remember me</label>
                        </div>
                        <button type="submit" class="btn btn--m btn--blue btn--raised pull-right" lx-ripple>Login
                        </button>
                    </div>
                    <br/>
                    <br/>
                    <br/>
                    <center><span>[[message]]</span></center>
                </md-card-content>
            </md-card>
        </form>
    </div>
@stop
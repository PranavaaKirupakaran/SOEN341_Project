<div>
    <div class="container" style="padding: 30px 0">
        <div class="row">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Manage Profile
                </div>
                <div class="panel-body">
                    <form>
                        <div class="col-md-4">
                            @if($newimage)
                                <img src="{{$newimage->temporaryUrl()}}" width="100%"/>
                            @elseif($image)
                                <img src="{{asset('assets/images/profile')}}/{{$user->profile->image}}" width="100%"/>
                            @else
                            <img src="{{asset('assets/images/profile/profile-dummy.png')}}" width="100%"/>
                            @endif 
                            <input type="file" class="form-control" wire:model="newimage"/>                            
                        </div>
                        <div class="col-md-8">
                            <p><b>Name: </b><input type="text" class="form-control" wire:model="name"/></p>
                            @error('name') <p class="text-danger">{{$message}}</p>@enderror
                            <p><b>Email: </b>{{$email}}</p>
                            <p><b>Address Line 1: </b><input type="text" class="form-control" wire:model="line1"/></p>
                            @error('lien1') <p class="text-danger">{{$message}}</p>@enderror
                            <p><b>Address Line 2: </b><input type="text" class="form-control" wire:model="line2"/></p>
                            @error('line2') <p class="text-danger">{{$message}}</p>@enderror
                            <p><b>City: </b><input type="text" class="form-control" wire:model="city"/></p>
                            @error('city') <p class="text-danger">{{$message}}</p>@enderror
                            <p><b>Province: </b><input type="text" class="form-control" wire:model="province"/></p>
                            @error('province') <p class="text-danger">{{$message}}</p>@enderror
                            <p><b>Country: </b><input type="text" class="form-control" wire:model="country"/></p>
                            @error('country') <p class="text-danger">{{$message}}</p>@enderror
                            <p><b>Postal Code: </b><input type="text" class="form-control" wire:model="postal"/></p>
                            @error('postal') <p class="text-danger">{{$message}}</p>@enderror
                            <button type="submit" class="btn btn-info pull-right">Update Profile</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
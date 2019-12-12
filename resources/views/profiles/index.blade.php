
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="https://instagram.fdac15-1.fna.fbcdn.net/vp/66e3e5ef1f333abd2c730595939b15f3/5E882836/t51.2885-19/s320x320/39968079_2109961972589219_6077248195488907264_n.jpg?_nc_ht=instagram.fdac15-1.fna.fbcdn.net" class="rounded-circle" style="height:150px">
        </div>
        <div class="col-9 pt-5">
            <div class='d-flex justify-content-between align-items-baseline'>
                <h3>{{ $user->username }}</h3>
                <a href="#">Add New Post</a>
            </div>
            <div class="d-flex p">
                <div class="pr-4"><strong>200</strong> posts</div>
                <div class="pr-4"><strong>80</strong> followera</div>
                <div class="pr-4"><strong>50</strong> following</div>
            </div>
            <div class="font-weight-bold pt-3">{{ $user->profile->title }}</div>
            <div>{{ $user->profile->description }}</div>
            <div><a href="https://www.facebook.com/NostalgicShahedbd">{{ $user->profile->url }}</a></div>
        </div>
    </div>
    <div class="row">
        <div class="col-3">
            <img src="https://instagram.fdac15-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/c0.135.1080.1080a/s640x640/51607495_149344439303003_3478775501041673299_n.jpg?_nc_ht=instagram.fdac15-1.fna.fbcdn.net&_nc_cat=111&oh=5b070cb0e8ad4b164c03e0ab6cda5be2&oe=5E7D6BAE" class="w-100" >
        </div>
        <div class="col-3">
            <img src="https://instagram.fdac15-1.fna.fbcdn.net/v/t51.2885-15/e35/41684074_1085117344979435_5352132551591477150_n.jpg?_nc_ht=instagram.fdac15-1.fna.fbcdn.net&_nc_cat=111&oh=de86eae926021671c248009b18c3a744&oe=5E890221" class="w-100">
        </div>
        <div class="col-3">
            <img src="https://instagram.fdac15-1.fna.fbcdn.net/v/t51.2885-15/e35/c257.0.565.565a/51852468_378600456028687_6002496811962147275_n.jpg?_nc_ht=instagram.fdac15-1.fna.fbcdn.net&_nc_cat=107&oh=f24018c5efe25e33ab21bd34053e68eb&oe=5E8A59D2" class="w-100">
        </div>
        <div class="col-3">
            <img src="https://instagram.fdac15-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/c0.150.1200.1200a/s640x640/77063954_163063444755197_3614928229529848200_n.jpg?_nc_ht=instagram.fdac15-1.fna.fbcdn.net&_nc_cat=105&oh=c018d18fee9e50d45cb2aba239f31f16&oe=5E74A2D7" class="w-100">
        </div>
    </div>
    <div class="row pt-3">
        <div class="col-3">
            <img src="https://instagram.fdac15-1.fna.fbcdn.net/v/t51.2885-15/e35/41684074_1085117344979435_5352132551591477150_n.jpg?_nc_ht=instagram.fdac15-1.fna.fbcdn.net&_nc_cat=111&oh=de86eae926021671c248009b18c3a744&oe=5E890221" class="w-100">
        </div>
        <div class="col-3">
            <img src="https://instagram.fdac15-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/c0.135.1080.1080a/s640x640/51607495_149344439303003_3478775501041673299_n.jpg?_nc_ht=instagram.fdac15-1.fna.fbcdn.net&_nc_cat=111&oh=5b070cb0e8ad4b164c03e0ab6cda5be2&oe=5E7D6BAE" class="w-100" >
        </div>

        <div class="col-3">
            <img src="https://instagram.fdac15-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/c0.150.1200.1200a/s640x640/77063954_163063444755197_3614928229529848200_n.jpg?_nc_ht=instagram.fdac15-1.fna.fbcdn.net&_nc_cat=105&oh=c018d18fee9e50d45cb2aba239f31f16&oe=5E74A2D7" class="w-100">
        </div>
        <div class="col-3">
            <img src="https://instagram.fdac15-1.fna.fbcdn.net/v/t51.2885-15/e35/c257.0.565.565a/51852468_378600456028687_6002496811962147275_n.jpg?_nc_ht=instagram.fdac15-1.fna.fbcdn.net&_nc_cat=107&oh=f24018c5efe25e33ab21bd34053e68eb&oe=5E8A59D2" class="w-100">
        </div>
    </div>
</div>
@endsection




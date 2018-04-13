
'use strict';

var videoElement = document.querySelector('video');
var videoSelect = document.querySelector('select#videoSource');

navigator.getUserMedia = navigator.getUserMedia ||
navigator.webkitGetUserMedia || navigator.mozGetUserMedia;

function gotSources(sourceInfos) {
    for (var i = 0; i !== sourceInfos.length; ++i) {


        var sourceInfo = sourceInfos[i];
        var option = document.createElement('option');
        option.value = sourceInfo.id;
        if (sourceInfo.kind === 'video') {
            option.text = sourceInfo.label || 'Camera ' + (videoSelect.length + 1);
            videoSelect.appendChild(option);
        } else {
            //console.log('Some other kind of source: ', sourceInfo);
        }
    }
}



function successCallback(stream) {
    window.stream = stream; // make stream available to console
    videoElement.src = window.URL.createObjectURL(stream);
    videoElement.play();
}

function errorCallback(error) {
    console.log('navigator.getUserMedia error: ', error);
}

function start() {
    if (!!window.stream) {
        videoElement.src = null;
        window.stream.stop();
    }
    var videoSource = videoSelect.value;
    var constraints = {
        video: {
            optional: [{
                sourceId: videoSource
            }]
        }
    };
    navigator.getUserMedia(constraints, successCallback, errorCallback);
}

videoSelect.onchange = start;

start();
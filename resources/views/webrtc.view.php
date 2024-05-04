<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1, maximum-scale=1">
        <meta id="theme-color" name="theme-color" content="#ffffff">
        <title>getUserMedia</title>

        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
        <link rel="stylesheet" href="./css/main.css">
        <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    </head>

    <body>
        <div id="container">
            <h1><a href="#" title="WebRTC samples homepage">Get a Media Stream</a>
                <span>getUserMedia</span>
            </h1>

            <video id="gum-local" content="width=device-width, initial-scale=0.5" autoplay playsinline></video>

            <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" id="showVideo">
                Open camera
            </button>

            <div id="errorMsg"></div>
        </div>

        <script>
            'use strict';

            // Define video constraints
            const videoConstraints = {
                audio: false,
                video: {
                    width: 1280,
                    height: 720
                }
            };

            // Add event listener to the button for triggering media stream initialization
            document.querySelector('#showVideo').addEventListener('click', e => initialize(e));

            // Initialization function to request and handle media stream
            async function initialize(e) {
                try {
                    // const stream = await navigator.mediaDevices.getUserMedia(videoConstraints);
                    const stream = await navigator.mediaDevices.getDisplayMedia({
                        video: true,
                        audio: true
                    });

                    attachVideoStream(stream);
                    e.target.disabled = true; // Disable the button after successful initialization
                } catch (error) {
                    console.log(error)
                    onCatch(error);
                }
            }

            // Function to handle successful acquisition of media stream
            function attachVideoStream(stream) {
                const videoElement = document.querySelector('video');
                window.stream = stream; // Make variable available to the browser console
                videoElement.srcObject = stream;
            }

            // Function to handle errors during media stream acquisition
            function onCatch(error) {
                const errorElement = document.querySelector('#errorMsg');
                errorElement.innerHTML += `<p>Something went wrong: ${error.name}</p>`;
            }
        </script>
    </body>

</html>

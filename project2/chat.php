<!-- Page for interacting with the chat feature. -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    .div {
      background-color: rgba(255, 255, 255, 0);
      display: flex;
      max-width: 480px;
      width: 100%;
      flex-direction: column;
      margin: 0 auto;
    }
  
    .div-2 {
      background-color: #f6ebea;
      display: flex;
      width: 100%;
      flex-direction: column;
    }
  
    .div-3 {
      border-bottom: 1px solid #000;
      align-self: stretch;
      display: flex;
      height: 100px;
      flex-direction: column;
    }
  
    .div-4 {
      align-self: stretch;
      display: flex;
      margin-top: 20px;
      width: 100%;
      flex-direction: column;
      padding: 0 15px;
    }
  
    .span {
      display: flex;
      justify-content: space-between;
      gap: 20px;
    }
  
    .span-2 {
      color: #000;
      border-radius: 15px;
      background-color: #bcb8e0;
      flex-grow: 1;
      justify-content: center;
      padding: 9px 15px;
      font: 400 24px PoetsenOne, sans-serif;
    }
  
    .div-5 {
      color: #000;
      margin: auto 0;
      font: 400 24px PoetsenOne, sans-serif;
    }
  
    .div-6 {
      align-self: center;
      display: flex;
      margin-top: 14px;
      width: 100%;
      max-width: 365px;
      gap: 5px;
      padding: 0 1px;
    }
  
    .span-3 {
      border-radius: 30px 30px 0px 30px;
      box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);
      background-color: #dae0e1;
      display: flex;
      flex-grow: 1;
      flex-basis: 0%;
      flex-direction: column;
      align-items: end;
      margin-left: -14px;
      padding: 31px 16px 10px 80px;
    }
  
    .div-7 {
      color: #000;
      font: 700 20px Inter, sans-serif;
    }
  
    .div-8 {
      color: #000;
      text-align: right;
      margin-top: 14px;
      font: 400 14px Inter, sans-serif;
    }
  
    .div-9 {
      color: #000;
      margin-top: 30px;
      white-space: nowrap;
      font: 400 10px Inter, sans-serif;
    }
  
    .img {
      aspect-ratio: 0.98;
      object-fit: contain;
      object-position: center;
      width: 39px;
      fill: #000;
      overflow: hidden;
      align-self: end;
      margin-top: 80px;
      max-width: 100%;
    }
  
    .div-10 {
      align-self: stretch;
      display: flex;
      margin-top: 7px;
      width: 100%;
      flex-direction: column;
    }
  
    .div-11 {
      display: flex;
      width: 100%;
      align-items: end;
      justify-content: space-between;
      gap: 6px;
    }
  
    .img-2 {
      aspect-ratio: 1;
      object-fit: contain;
      object-position: center;
      width: 40px;
      fill: #000;
      overflow: hidden;
      margin-top: 76px;
      max-width: 100%;
    }
  
    .span-4 {
      border-radius: 30px 30px 30px 0px;
      box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);
      background-color: #f0e5e8;
      align-self: stretch;
      display: flex;
      flex-grow: 1;
      flex-basis: 0%;
      flex-direction: column;
      align-items: start;
      margin-right: 45px;
      padding: 32px 80px 10px 14px;
    }
  
    .div-12 {
      color: #000;
      font: 700 20px Inter, sans-serif;
    }
  
    .div-13 {
      color: #000;
      margin-top: 8px;
      font: 400 20px Inter, sans-serif;
    }
  
    .div-14 {
      color: #000;
      margin-top: 28px;
      font: 400 10px Inter, sans-serif;
    }
  
    .div-15 {
      display: flex;
      margin-top: 7px;
      width: 100%;
      align-items: end;
      justify-content: space-between;
      gap: 6px;
    }
  
    .img-3 {
      aspect-ratio: 1;
      object-fit: contain;
      object-position: center;
      width: 40px;
      fill: #000;
      overflow: hidden;
      margin-top: 76px;
      max-width: 100%;
    }
  
    .span-5 {
      border-radius: 30px 30px 30px 0px;
      box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);
      background-color: #f0e5e8;
      align-self: stretch;
      display: flex;
      flex-grow: 1;
      flex-basis: 0%;
      flex-direction: column;
      align-items: start;
      margin-right: 45px;
      padding: 32px 80px 10px 14px;
    }
  
    .div-16 {
      color: #000;
      font: 700 20px Inter, sans-serif;
    }
  
    .div-17 {
      color: #000;
      margin-top: 12px;
      white-space: nowrap;
      font: 400 14px Inter, sans-serif;
    }
  
    .div-18 {
      color: #000;
      margin-top: 31px;
      font: 400 10px Inter, sans-serif;
    }
  
    .img-4 {
      aspect-ratio: 1;
      object-fit: contain;
      object-position: center;
      width: 50px;
      overflow: hidden;
      align-self: end;
      max-width: 100%;
      margin: 158px 19px 0 0;
    }
  
    .div-19 {
      background-color: #fff;
      align-self: stretch;
      display: flex;
      margin-top: 23px;
      width: 100%;
      justify-content: space-between;
      gap: 20px;
      padding: 10px 20px 10px 12px;
    }
  
    .span-6 {
      display: flex;
      justify-content: space-between;
      gap: 12px;
    }
  
    .span-7 {
      color: #fff;
      white-space: nowrap;
      border-radius: 50%;
      aspect-ratio: 1.0285714285714285;
      justify-content: center;
      padding: 10px 14px 10px 7px;
      font: 400 32px Inter, sans-serif;
    }
  
    .div-20 {
      color: rgba(0, 0, 0, 0.5);
      align-self: center;
      flex-grow: 1;
      white-space: nowrap;
      margin: auto 0;
      font: 400 16px Inter, sans-serif;
    }
  
    .div-21 {
      align-self: start;
      display: flex;
      gap: 8px;
    }
  
    .img-5 {
      aspect-ratio: 1;
      object-fit: contain;
      object-position: center;
      width: 30px;
      overflow: hidden;
      max-width: 100%;
    }
  
    .img-6 {
      aspect-ratio: 1;
      object-fit: contain;
      object-position: center;
      width: 30px;
      overflow: hidden;
      max-width: 100%;
    }
  
    .div-22 {
      width: 100%;
      padding: 0 20px;
    }
  
    .div-23 {
      gap: 20px;
      display: flex;
    }
  
    @media (max-width: 991px) {
      .div-23 {
        flex-direction: column;
        align-items: stretch;
        gap: 0px;
      }
    }
  
    .column {
      display: flex;
      flex-direction: column;
      line-height: normal;
      width: 25%;
      margin-left: 0px;
    }
  
    @media (max-width: 991px) {
      .column {
        width: 100%;
      }
    }
  
    .img-7 {
      aspect-ratio: 1.05;
      object-fit: contain;
      object-position: center;
      width: 100%;
      overflow: hidden;
      flex-grow: 1;
      flex: 1;
    }
  
    .column-2 {
      display: flex;
      flex-direction: column;
      line-height: normal;
      width: 25%;
      margin-left: 20px;
    }
  
    @media (max-width: 991px) {
      .column-2 {
        width: 100%;
      }
    }
  
    .img-8 {
      aspect-ratio: 1.04;
      object-fit: contain;
      object-position: center;
      width: 100%;
      overflow: hidden;
      flex-grow: 1;
      flex: 1;
    }
  
    .column-3 {
      display: flex;
      flex-direction: column;
      line-height: normal;
      width: 25%;
      margin-left: 20px;
    }
  
    @media (max-width: 991px) {
      .column-3 {
        width: 100%;
      }
    }
  
    .span-8 {
      background-color: #e2e3e3;
      display: flex;
      flex-direction: column;
      align-items: center;
      width: 100%;
      height: 106px;
      flex: 1;
      padding: 27px 18px;
    }
  
    .img-9 {
      aspect-ratio: 0.89;
      object-fit: contain;
      object-position: center;
      width: 25px;
      overflow: hidden;
      max-width: 100%;
    }
  
    .div-24 {
      color: rgba(0, 0, 0, 0.25);
      text-align: center;
      align-self: stretch;
      margin-top: 10px;
      white-space: nowrap;
      font: 400 12px Inter, sans-serif;
    }
  
    .column-4 {
      display: flex;
      flex-direction: column;
      line-height: normal;
      width: 25%;
      margin-left: 20px;
    }
  
    @media (max-width: 991px) {
      .column-4 {
        width: 100%;
      }
    }
  
    .img-10 {
      aspect-ratio: 1.03;
      object-fit: contain;
      object-position: center;
      width: 100%;
      overflow: hidden;
      flex-grow: 1;
      flex: 1;
    }
  </style>
</head>
<body>
  <div class="div">
    <div class="div-2">
      <div class="div-3"></div>
      <div class="div-4">
        <span class="span">
          <span class="span-2">Back</span>
          <div class="div-5">Chatroom</div>
        </span>
        <div class="div-6">
          <span class="span-3">
            <div class="div-7">Me</div>
            <div class="div-8">Whasssssssssup </div>
            <div class="div-9">00:47 AM</div>
          </span>
          <img loading="lazy"
            src="https://cdn.builder.io/api/v1/image/assets/TEMP/245c60da5809fb9873c7b22b9c19c345009a371845026ee9a85d8d84d38aa961?apiKey=a93bb8b56f0c409a9b2ebf9a6a40796d&"
            class="img" />
        </div>
      </div>
      <div class="div-10">
        <div class="div-11">
          <img loading="lazy"
            src="https://cdn.builder.io/api/v1/image/assets/TEMP/3658586ac930672311259c41900823a99e0175d2a865b647d27a11931e4612e7?apiKey=a93bb8b56f0c409a9b2ebf9a6a40796d&"
            class="img-2" />
          <span class="span-4">
            <div class="div-12">Ghostface</div>
            <div class="div-13">😂😂😂</div>
            <div class="div-14">3:59 AM</div>
          </span>
        </div>
        <div class="div-15">
          <img loading="lazy"
            src="https://cdn.builder.io/api/v1/image/assets/TEMP/3658586ac930672311259c41900823a99e0175d2a865b647d27a11931e4612e7?apiKey=a93bb8b56f0c409a9b2ebf9a6a40796d&"
            class="img-3" />
          <span class="span-5">
            <div class="div-16">Ghostface</div>
            <div class="div-17">Whatssssssssssssssssup</div>
            <div class="div-18">4:00 AM</div>
          </span>
        </div>
      </div>
      <img loading="lazy"
        src="https://cdn.builder.io/api/v1/image/assets/TEMP/0201fb5999a04ef75eb0e10c402d8015078ea8041a3dcfec022cac5e243bc5d8?apiKey=a93bb8b56f0c409a9b2ebf9a6a40796d&"
        class="img-4" />
      <div class="div-19">
        <span class="span-6">
          <span class="span-7">+</span>
          <div class="div-20">Write something...</div>
        </span>
        <div class="div-21">
          <img loading="lazy"
            srcset="https://cdn.builder.io/api/v1/image/assets/TEMP/946cb85c5247c61b315a2e482c71b07f74b80f5bbdae50525118ecbf02c0a869?apiKey=a93bb8b56f0c409a9b2ebf9a6a40796d&width=100 100w, https://cdn.builder.io/api/v1/image/assets/TEMP/946cb85c5247c61b315a2e482c71b07f74b80f5bbdae50525118ecbf02c0a869?apiKey=a93bb8b56f0c409a9b2ebf9a6a40796d&width=200 200w, https://cdn.builder.io/api/v1/image/assets/TEMP/946cb85c5247c61b315a2e482c71b07f74b80f5bbdae50525118ecbf02c0a869?apiKey=a93bb8b56f0c409a9b2ebf9a6a40796d&width=400 400w, https://cdn.builder.io/api/v1/image/assets/TEMP/946cb85c5247c61b315a2e482c71b07f74b80f5bbdae50525118ecbf02c0a869?apiKey=a93bb8b56f0c409a9b2ebf9a6a40796d&width=800 800w, https://cdn.builder.io/api/v1/image/assets/TEMP/946cb85c5247c61b315a2e482c71b07f74b80f5bbdae50525118ecbf02c0a869?apiKey=a93bb8b56f0c409a9b2ebf9a6a40796d&width=1200 1200w, https://cdn.builder.io/api/v1/image/assets/TEMP/946cb85c5247c61b315a2e482c71b07f74b80f5bbdae50525118ecbf02c0a869?apiKey=a93bb8b56f0c409a9b2ebf9a6a40796d&width=1600 1600w, https://cdn.builder.io/api/v1/image/assets/TEMP/946cb85c5247c61b315a2e482c71b07f74b80f5bbdae50525118ecbf02c0a869?apiKey=a93bb8b56f0c409a9b2ebf9a6a40796d&width=2000 2000w, https://cdn.builder.io/api/v1/image/assets/TEMP/946cb85c5247c61b315a2e482c71b07f74b80f5bbdae50525118ecbf02c0a869?apiKey=a93bb8b56f0c409a9b2ebf9a6a40796d&"
            class="img-5" />
          <img loading="lazy"
            srcset="https://cdn.builder.io/api/v1/image/assets/TEMP/a61ff1e6b90c681cdaf06f5d7a1b11e49443e60afe22f618755880c07179d994?apiKey=a93bb8b56f0c409a9b2ebf9a6a40796d&width=100 100w, https://cdn.builder.io/api/v1/image/assets/TEMP/a61ff1e6b90c681cdaf06f5d7a1b11e49443e60afe22f618755880c07179d994?apiKey=a93bb8b56f0c409a9b2ebf9a6a40796d&width=200 200w, https://cdn.builder.io/api/v1/image/assets/TEMP/a61ff1e6b90c681cdaf06f5d7a1b11e49443e60afe22f618755880c07179d994?apiKey=a93bb8b56f0c409a9b2ebf9a6a40796d&width=400 400w, https://cdn.builder.io/api/v1/image/assets/TEMP/a61ff1e6b90c681cdaf06f5d7a1b11e49443e60afe22f618755880c07179d994?apiKey=a93bb8b56f0c409a9b2ebf9a6a40796d&width=800 800w, https://cdn.builder.io/api/v1/image/assets/TEMP/a61ff1e6b90c681cdaf06f5d7a1b11e49443e60afe22f618755880c07179d994?apiKey=a93bb8b56f0c409a9b2ebf9a6a40796d&width=1200 1200w, https://cdn.builder.io/api/v1/image/assets/TEMP/a61ff1e6b90c681cdaf06f5d7a1b11e49443e60afe22f618755880c07179d994?apiKey=a93bb8b56f0c409a9b2ebf9a6a40796d&width=1600 1600w, https://cdn.builder.io/api/v1/image/assets/TEMP/a61ff1e6b90c681cdaf06f5d7a1b11e49443e60afe22f618755880c07179d994?apiKey=a93bb8b56f0c409a9b2ebf9a6a40796d&width=2000 2000w, https://cdn.builder.io/api/v1/image/assets/TEMP/a61ff1e6b90c681cdaf06f5d7a1b11e49443e60afe22f618755880c07179d994?apiKey=a93bb8b56f0c409a9b2ebf9a6a40796d&"
            class="img-6" />
        </div>
      </div>
    </div>
    <div class="div-22">
      <div class="div-23">
        <div class="column">
          <img loading="lazy"
            srcset="https://cdn.builder.io/api/v1/image/assets/TEMP/6a41c49b-00af-4b83-a4ad-a1c35bc466b3?apiKey=a93bb8b56f0c409a9b2ebf9a6a40796d&width=100 100w, https://cdn.builder.io/api/v1/image/assets/TEMP/6a41c49b-00af-4b83-a4ad-a1c35bc466b3?apiKey=a93bb8b56f0c409a9b2ebf9a6a40796d&width=200 200w, https://cdn.builder.io/api/v1/image/assets/TEMP/6a41c49b-00af-4b83-a4ad-a1c35bc466b3?apiKey=a93bb8b56f0c409a9b2ebf9a6a40796d&width=400 400w, https://cdn.builder.io/api/v1/image/assets/TEMP/6a41c49b-00af-4b83-a4ad-a1c35bc466b3?apiKey=a93bb8b56f0c409a9b2ebf9a6a40796d&width=800 800w, https://cdn.builder.io/api/v1/image/assets/TEMP/6a41c49b-00af-4b83-a4ad-a1c35bc466b3?apiKey=a93bb8b56f0c409a9b2ebf9a6a40796d&width=1200 1200w, https://cdn.builder.io/api/v1/image/assets/TEMP/6a41c49b-00af-4b83-a4ad-a1c35bc466b3?apiKey=a93bb8b56f0c409a9b2ebf9a6a40796d&width=1600 1600w, https://cdn.builder.io/api/v1/image/assets/TEMP/6a41c49b-00af-4b83-a4ad-a1c35bc466b3?apiKey=a93bb8b56f0c409a9b2ebf9a6a40796d&width=2000 2000w, https://cdn.builder.io/api/v1/image/assets/TEMP/6a41c49b-00af-4b83-a4ad-a1c35bc466b3?apiKey=a93bb8b56f0c409a9b2ebf9a6a40796d&"
            class="img-7" />
        </div>
        <div class="column-2">
          <img loading="lazy"
            srcset="https://cdn.builder.io/api/v1/image/assets/TEMP/63c38b13-9f20-4e1d-8bf8-089f77df448b?apiKey=a93bb8b56f0c409a9b2ebf9a6a40796d&width=100 100w, https://cdn.builder.io/api/v1/image/assets/TEMP/63c38b13-9f20-4e1d-8bf8-089f77df448b?apiKey=a93bb8b56f0c409a9b2ebf9a6a40796d&width=200 200w, https://cdn.builder.io/api/v1/image/assets/TEMP/63c38b13-9f20-4e1d-8bf8-089f77df448b?apiKey=a93bb8b56f0c409a9b2ebf9a6a40796d&width=400 400w, https://cdn.builder.io/api/v1/image/assets/TEMP/63c38b13-9f20-4e1d-8bf8-089f77df448b?apiKey=a93bb8b56f0c409a9b2ebf9a6a40796d&width=800 800w, https://cdn.builder.io/api/v1/image/assets/TEMP/63c38b13-9f20-4e1d-8bf8-089f77df448b?apiKey=a93bb8b56f0c409a9b2ebf9a6a40796d&width=1200 1200w, https://cdn.builder.io/api/v1/image/assets/TEMP/63c38b13-9f20-4e1d-8bf8-089f77df448b?apiKey=a93bb8b56f0c409a9b2ebf9a6a40796d&width=1600 1600w, https://cdn.builder.io/api/v1/image/assets/TEMP/63c38b13-9f20-4e1d-8bf8-089f77df448b?apiKey=a93bb8b56f0c409a9b2ebf9a6a40796d&width=2000 2000w, https://cdn.builder.io/api/v1/image/assets/TEMP/63c38b13-9f20-4e1d-8bf8-089f77df448b?apiKey=a93bb8b56f0c409a9b2ebf9a6a40796d&"
            class="img-8" />
        </div>
        <div class="column-3">
          <span class="span-8">
            <img loading="lazy"
              srcset="https://cdn.builder.io/api/v1/image/assets/TEMP/e4aeb991-d3ed-4263-be92-1c098f2590a6?apiKey=a93bb8b56f0c409a9b2ebf9a6a40796d&width=100 100w, https://cdn.builder.io/api/v1/image/assets/TEMP/e4aeb991-d3ed-4263-be92-1c098f2590a6?apiKey=a93bb8b56f0c409a9b2ebf9a6a40796d&width=200 200w, https://cdn.builder.io/api/v1/image/assets/TEMP/e4aeb991-d3ed-4263-be92-1c098f2590a6?apiKey=a93bb8b56f0c409a9b2ebf9a6a40796d&width=400 400w, https://cdn.builder.io/api/v1/image/assets/TEMP/e4aeb991-d3ed-4263-be92-1c098f2590a6?apiKey=a93bb8b56f0c409a9b2ebf9a6a40796d&width=800 800w, https://cdn.builder.io/api/v1/image/assets/TEMP/e4aeb991-d3ed-4263-be92-1c098f2590a6?apiKey=a93bb8b56f0c409a9b2ebf9a6a40796d&width=1200 1200w, https://cdn.builder.io/api/v1/image/assets/TEMP/e4aeb991-d3ed-4263-be92-1c098f2590a6?apiKey=a93bb8b56f0c409a9b2ebf9a6a40796d&width=1600 1600w, https://cdn.builder.io/api/v1/image/assets/TEMP/e4aeb991-d3ed-4263-be92-1c098f2590a6?apiKey=a93bb8b56f0c409a9b2ebf9a6a40796d&width=2000 2000w, https://cdn.builder.io/api/v1/image/assets/TEMP/e4aeb991-d3ed-4263-be92-1c098f2590a6?apiKey=a93bb8b56f0c409a9b2ebf9a6a40796d&"
              class="img-9" />
            <div class="div-24">Assignments</div>
          </span>
        </div>
        <div class="column-4">
          <img loading="lazy"
            srcset="https://cdn.builder.io/api/v1/image/assets/TEMP/0d35b575-703d-4d8d-ae02-b493bbd03eb9?apiKey=a93bb8b56f0c409a9b2ebf9a6a40796d&width=100 100w, https://cdn.builder.io/api/v1/image/assets/TEMP/0d35b575-703d-4d8d-ae02-b493bbd03eb9?apiKey=a93bb8b56f0c409a9b2ebf9a6a40796d&width=200 200w, https://cdn.builder.io/api/v1/image/assets/TEMP/0d35b575-703d-4d8d-ae02-b493bbd03eb9?apiKey=a93bb8b56f0c409a9b2ebf9a6a40796d&width=400 400w, https://cdn.builder.io/api/v1/image/assets/TEMP/0d35b575-703d-4d8d-ae02-b493bbd03eb9?apiKey=a93bb8b56f0c409a9b2ebf9a6a40796d&width=800 800w, https://cdn.builder.io/api/v1/image/assets/TEMP/0d35b575-703d-4d8d-ae02-b493bbd03eb9?apiKey=a93bb8b56f0c409a9b2ebf9a6a40796d&width=1200 1200w, https://cdn.builder.io/api/v1/image/assets/TEMP/0d35b575-703d-4d8d-ae02-b493bbd03eb9?apiKey=a93bb8b56f0c409a9b2ebf9a6a40796d&width=1600 1600w, https://cdn.builder.io/api/v1/image/assets/TEMP/0d35b575-703d-4d8d-ae02-b493bbd03eb9?apiKey=a93bb8b56f0c409a9b2ebf9a6a40796d&width=2000 2000w, https://cdn.builder.io/api/v1/image/assets/TEMP/0d35b575-703d-4d8d-ae02-b493bbd03eb9?apiKey=a93bb8b56f0c409a9b2ebf9a6a40796d&"
            class="img-10" />
        </div>
      </div>
    </div>
  </div>
  
</body>
</html>
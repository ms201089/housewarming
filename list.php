<?php
session_start();
include "config.php";
?>

<?php
			  $s1="SELECT `Sr`, `Name`, `Image`, `Link`, `other` FROM `list`";
			  $q1=mysqli_query($conn,$s1);
			  $r1=mysqli_fetch_array($q1);
			  $sr = $r1['Sr'];
			  $name = $r1['Name'];
			  $img = $r1['Image'];
			  $url = $r1['Link'];
			  $other = $r1['other'];
			  ?>
<!DOCTYPE html>

<html class="translated-ltr"><head>
<title></title>
<meta charset="utf-8">
<meta content="width=device-width" name="viewport">
<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Abril+Fatface" rel="stylesheet" type="text/css">
<style>
		.bee-row,
		.bee-row-content {
			position: relative
		}

		.bee-form .bee-form-row .bee-field button {
			font-size: inherit;
			font-family: inherit
		}

		.bee-button .content {
			text-align: center
		}

		.bee-row-2,
		.bee-row-2 .bee-row-content {
			background-size: auto;
			background-repeat: no-repeat
		}

		body {
			background-color: #fff;
			color: #000;
			font-family: Montserrat, Trebuchet MS, Lucida Grande, Lucida Sans Unicode, Lucida Sans, Tahoma, sans-serif
		}

		.bee-row-1 .bee-col-2 .bee-block-1 li a,
		a {
			color: #222
		}

		* {
			box-sizing: border-box
		}

		body,
		h1,
		h2,
		h3,
		p {
			margin: 0
		}

		.bee-menu .bee-hamburger-trigger {
			display: none
		}

		.bee-row-content {
			max-width: 1280px;
			margin: 0 auto;
			display: flex
		}

		.bee-row-content .bee-col-w2 {
			flex-basis: 17%
		}

		.bee-row-content .bee-col-w3 {
			flex-basis: 25%
		}

		.bee-row-content .bee-col-w4 {
			flex-basis: 33%
		}

		.bee-row-content .bee-col-w5 {
			flex-basis: 42%
		}

		.bee-row-content .bee-col-w6 {
			flex-basis: 50%
		}

		.bee-row-content .bee-col-w7 {
			flex-basis: 58%
		}

		.bee-row-21 .bee-col-2 .bee-block-3 div.label:not(.inline),
		.bee-row-21 .bee-col-2 .bee-block-3 label:not(.inline),
		.bee-row-24 .bee-col-4 .bee-block-2 div.label:not(.inline),
		.bee-row-24 .bee-col-4 .bee-block-2 label:not(.inline),
		.bee-row-content .bee-col-w12 {
			flex-basis: 100%
		}

		.bee-button a,
		.bee-icon .bee-icon-label-right a,
		.bee-menu ul li a {
			text-decoration: none
		}

		.bee-image {
			overflow: auto
		}

		.bee-image .bee-center {
			margin: 0 auto
		}

		.bee-row-10 .bee-col-1 .bee-block-1,
		.bee-row-19 .bee-col-2 .bee-block-1,
		.bee-row-2 .bee-col-2 .bee-block-1,
		.bee-row-21 .bee-col-1 .bee-block-1,
		.bee-row-21 .bee-col-2 .bee-block-3 .bee-form-row:not(.bee-sidelabel) input:not([type=checkbox]):not([type=radio]),
		.bee-row-24 .bee-col-4 .bee-block-2 .bee-form-row:not(.bee-sidelabel) input:not([type=checkbox]):not([type=radio]),
		.bee-row-4 .bee-col-1 .bee-block-1,
		.bee-row-7 .bee-col-1 .bee-block-1,
		.bee-row-7 .bee-col-2 .bee-block-1,
		.bee-row-7 .bee-col-3 .bee-block-1,
		.bee-row-8 .bee-col-1 .bee-block-1,
		.bee-row-8 .bee-col-2 .bee-block-1,
		.bee-row-8 .bee-col-3 .bee-block-1 {
			width: 100%
		}

		.bee-form .bee-form-row .bee-field {
			padding: 3px;
			display: flex;
			flex: 1;
			flex-wrap: wrap;
			align-items: center
		}

		.bee-form .bee-form-row .bee-field.bee-inline-field {
			flex-wrap: nowrap;
			align-items: flex-start
		}

		.bee-form .bee-form-row .bee-field input:not([type=checkbox]):not([type=radio]),
		.bee-form .bee-form-row .bee-field textarea {
			flex-grow: 1;
			font-family: inherit;
			font-size: inherit
		}

		.bee-form .bee-form-row .bee-field input[type=checkbox]:not(:first-of-type) {
			margin-left: 15px
		}

		.bee-form .bee-form-row .bee-field .bee-button-container {
			flex-grow: 1
		}

		.bee-form input[type=color] {
			border: none;
			height: 38px
		}

		.bee-form input[type=color]::-webkit-color-swatch-wrapper {
			margin: 0;
			padding: 2px
		}

		.bee-menu ul {
			margin: 0;
			padding: 0
		}

		.bee-form input[type=color]::-webkit-color-swatch {
			margin: 0;
			padding: 0
		}

		.bee-icon {
			display: inline-block;
			vertical-align: middle
		}

		.bee-icon .bee-content {
			display: flex;
			align-items: center
		}

		.bee-image img {
			display: block;
			width: 100%
		}

		.bee-menu .bee-hamburger-controls {
			cursor: pointer;
			display: inline-block;
			position: relative
		}

		.bee-menu .bee-hamburger-controls span {
			display: block;
			position: absolute;
			top: 50%;
			left: 50%;
			background-size: 100%;
			background-repeat: no-repeat;
			transition: .12s ease-in-out
		}

		.bee-menu ul {
			list-style-type: none
		}

		.bee-menu ul.bee-horizontal li {
			display: inline-block
		}

		.bee-social .icon img {
			max-height: 32px
		}

		.bee-text {
			overflow-wrap: anywhere
		}

		.bee-row-1 {
			background-color: #fbf1e3;
			background-repeat: no-repeat
		}

		.bee-row-1 .bee-row-content,
		.bee-row-11 .bee-row-content,
		.bee-row-12 .bee-row-content,
		.bee-row-13 .bee-row-content,
		.bee-row-14 .bee-row-content,
		.bee-row-15 .bee-row-content,
		.bee-row-16 .bee-row-content,
		.bee-row-17 .bee-row-content,
		.bee-row-18 .bee-row-content,
		.bee-row-19 .bee-row-content,
		.bee-row-20 .bee-row-content,
		.bee-row-22 .bee-row-content,
		.bee-row-23 .bee-row-content,
		.bee-row-24 .bee-row-content,
		.bee-row-25 .bee-row-content,
		.bee-row-26 .bee-row-content,
		.bee-row-3 .bee-row-content,
		.bee-row-4 .bee-row-content,
		.bee-row-5 .bee-row-content,
		.bee-row-6 .bee-row-content,
		.bee-row-7 .bee-row-content,
		.bee-row-8 .bee-row-content,
		.bee-row-9 .bee-row-content {
			background-repeat: no-repeat;
			color: #000
		}

		.bee-row-1 .bee-col-1,
		.bee-row-1 .bee-col-2,
		.bee-row-12 .bee-col-1,
		.bee-row-13 .bee-col-1,
		.bee-row-13 .bee-col-2,
		.bee-row-15 .bee-col-1,
		.bee-row-18 .bee-col-1,
		.bee-row-19 .bee-col-1,
		.bee-row-19 .bee-col-2,
		.bee-row-19 .bee-col-3,
		.bee-row-4 .bee-col-2,
		.bee-row-6 .bee-col-1,
		.bee-row-7 .bee-col-1,
		.bee-row-7 .bee-col-2,
		.bee-row-7 .bee-col-3,
		.bee-row-8 .bee-col-1,
		.bee-row-8 .bee-col-2,
		.bee-row-8 .bee-col-3 {
			padding: 30px
		}

		.bee-row-1 .bee-col-1 .bee-block-1,
		.bee-row-24 .bee-col-1 .bee-block-1 {
			padding-top: 5px;
			width: 100%
		}

		.bee-row-1 .bee-col-2 .bee-block-1 {
			color: #222;
			font-family: inherit;
			font-size: 18px;
			text-align: right
		}

		.bee-row-2 {
			background-color: #fbf1e3
		}

		.bee-row-2 .bee-row-content {
			color: #000
		}

		.bee-row-2 .bee-col-1 {
			padding: 45px 30px 60px
		}

		.bee-row-2 .bee-col-1 .bee-block-1 {
			padding-top: 20px;
			text-align: center;
			width: 100%
		}

		.bee-row-2 .bee-col-1 .bee-block-2,
		.bee-row-2 .bee-col-1 .bee-block-3,
		.bee-row-4 .bee-col-2 .bee-block-2 {
			padding-top: 40px
		}

		.bee-row-10 .bee-col-2 .bee-block-4,
		.bee-row-2 .bee-col-1 .bee-block-4,
		.bee-row-4 .bee-col-2 .bee-block-3 {
			padding-top: 40px;
			text-align: left
		}

		.bee-row-2 .bee-col-2 {
			padding-bottom: 60px;
			padding-top: 60px
		}

		.bee-row-10,
		.bee-row-11,
		.bee-row-12,
		.bee-row-13,
		.bee-row-14,
		.bee-row-15,
		.bee-row-16,
		.bee-row-17,
		.bee-row-18,
		.bee-row-19,
		.bee-row-20,
		.bee-row-21,
		.bee-row-22,
		.bee-row-26,
		.bee-row-3,
		.bee-row-4,
		.bee-row-5,
		.bee-row-6,
		.bee-row-7,
		.bee-row-8,
		.bee-row-9 {
			background-repeat: no-repeat
		}

		.bee-row-4 .bee-col-1 {
			padding-bottom: 30px;
			padding-left: 30px;
			padding-right: 30px
		}

		.bee-row-19 .bee-col-1 .bee-block-1,
		.bee-row-19 .bee-col-1 .bee-block-3,
		.bee-row-19 .bee-col-3 .bee-block-1,
		.bee-row-4 .bee-col-2 .bee-block-1 {
			padding-top: 30px;
			text-align: center;
			width: 100%
		}

		.bee-row-10 .bee-col-2 .bee-block-2,
		.bee-row-12 .bee-col-1 .bee-block-1,
		.bee-row-13 .bee-col-1 .bee-block-2,
		.bee-row-13 .bee-col-2 .bee-block-2,
		.bee-row-15 .bee-col-1 .bee-block-1,
		.bee-row-18 .bee-col-1 .bee-block-1,
		.bee-row-21 .bee-col-2 .bee-block-2,
		.bee-row-24 .bee-col-2 .bee-block-1,
		.bee-row-24 .bee-col-3 .bee-block-1,
		.bee-row-24 .bee-col-4 .bee-block-1,
		.bee-row-6 .bee-col-1 .bee-block-1,
		.bee-row-7 .bee-col-1 .bee-block-2,
		.bee-row-7 .bee-col-2 .bee-block-2,
		.bee-row-7 .bee-col-3 .bee-block-2,
		.bee-row-8 .bee-col-1 .bee-block-2,
		.bee-row-8 .bee-col-2 .bee-block-2,
		.bee-row-8 .bee-col-3 .bee-block-2 {
			text-align: center;
			width: 100%
		}

		.bee-row-7 .bee-col-1 .bee-block-3,
		.bee-row-7 .bee-col-2 .bee-block-3,
		.bee-row-7 .bee-col-3 .bee-block-3,
		.bee-row-8 .bee-col-1 .bee-block-3,
		.bee-row-8 .bee-col-2 .bee-block-3,
		.bee-row-8 .bee-col-3 .bee-block-3 {
			padding-top: 5px
		}

		.bee-row-10 .bee-row-content,
		.bee-row-21 .bee-row-content {
			background-color: #fbf1e3;
			background-repeat: no-repeat;
			color: #000
		}

		.bee-row-10 .bee-col-1 {
			padding-bottom: 60px
		}

		.bee-row-10 .bee-col-2,
		.bee-row-21 .bee-col-1,
		.bee-row-21 .bee-col-2 {
			padding: 60px 30px
		}

		.bee-row-10 .bee-col-2 .bee-block-3 {
			padding-top: 30px
		}

		.bee-row-13 .bee-col-1 .bee-block-1,
		.bee-row-13 .bee-col-2 .bee-block-1 {
			color: #222;
			font-family: 'Abril Fatface', Arial, 'Helvetica Neue', Helvetica, sans-serif;
			font-size: 28px;
			text-align: center
		}

		.bee-row-13 .bee-col-1 .bee-block-3,
		.bee-row-13 .bee-col-2 .bee-block-3,
		.bee-row-16 .bee-col-1 .bee-block-2,
		.bee-row-16 .bee-col-2 .bee-block-2,
		.bee-row-16 .bee-col-3 .bee-block-2 {
			padding-top: 25px
		}

		.bee-row-16 .bee-col-1,
		.bee-row-16 .bee-col-2,
		.bee-row-16 .bee-col-3 {
			background-color: #fbf1e3;
			border-bottom: 30px solid #fff;
			border-left: 30px solid #fff;
			border-right: 30px solid #fff;
			border-top: 30px solid #fff;
			padding: 40px 30px
		}

		.bee-row-16 .bee-col-1 .bee-block-1,
		.bee-row-16 .bee-col-2 .bee-block-1,
		.bee-row-16 .bee-col-3 .bee-block-1 {
			color: #432b27;
			font-family: 'Abril Fatface', Arial, 'Helvetica Neue', Helvetica, sans-serif;
			font-size: 22px;
			text-align: left
		}

		.bee-row-19 .bee-col-1 .bee-block-2,
		.bee-row-19 .bee-col-1 .bee-block-4,
		.bee-row-19 .bee-col-3 .bee-block-2,
		.bee-row-24 .bee-col-1 .bee-block-2,
		.bee-row-24 .bee-col-1 .bee-block-3 {
			padding-top: 20px
		}

		.bee-row-21 .bee-col-2 .bee-block-3 {
			font-family: inherit;
			font-size: 16px;
			padding-top: 30px;
			text-align: left
		}

		.bee-row-23,
		.bee-row-24,
		.bee-row-25 {
			background-color: #432b27;
			background-repeat: no-repeat
		}

		.bee-row-24 .bee-col-1 {
			padding: 20px 30px 25px
		}

		.bee-row-24 .bee-col-2,
		.bee-row-24 .bee-col-3,
		.bee-row-24 .bee-col-4 {
			padding: 25px 30px
		}

		.bee-row-24 .bee-col-2 .bee-block-2 {
			color: #707070;
			font-family: inherit;
			font-size: 16px;
			padding-top: 20px;
			text-align: left
		}

		.bee-row-24 .bee-col-2 .bee-block-3 {
			padding-bottom: 10px;
			padding-top: 10px;
			text-align: left
		}

		.bee-row-24 .bee-col-3 .bee-block-2 {
			color: #fff;
			font-family: inherit;
			font-size: 16px;
			padding-top: 15px;
			text-align: left
		}

		.bee-row-24 .bee-col-4 .bee-block-2 {
			font-family: inherit;
			font-size: 16px;
			padding-top: 25px;
			text-align: center
		}

		.bee-row-26 .bee-col-1 {
			padding-bottom: 5px;
			padding-top: 5px
		}

		.bee-row-26 .bee-col-1 .bee-block-1 {
			color: #9d9d9d;
			font-family: inherit;
			font-size: 15px;
			padding-bottom: 5px;
			padding-top: 5px;
			text-align: center
		}

		.bee-row-1 .bee-col-2 .bee-block-1 li {
			padding: 5px 10px
		}

		.bee-row-13 .bee-col-1 .bee-block-1 .bee-icon-image,
		.bee-row-13 .bee-col-2 .bee-block-1 .bee-icon-image {
			padding: 0 0 20px
		}

		.bee-row-16 .bee-col-1 .bee-block-1 .bee-icon-image,
		.bee-row-16 .bee-col-2 .bee-block-1 .bee-icon-image,
		.bee-row-16 .bee-col-3 .bee-block-1 .bee-icon-image {
			padding: 0 15px 0 0
		}

		.bee-row-24 .bee-col-2 .bee-block-2 li,
		.bee-row-24 .bee-col-3 .bee-block-2 li {
			padding-bottom: 10px;
			padding-top: 10px
		}

		.bee-row-24 .bee-col-2 .bee-block-2 li a,
		.bee-row-24 .bee-col-3 .bee-block-2 li a {
			color: #fff
		}

		.bee-row-26 .bee-col-1 .bee-block-1 .bee-icon-image {
			padding: 5px 6px 5px 5px
		}

		@media (max-width:768px) {
			.bee-form form {
				width: 100% !important
			}

			.bee-menu ul.with-bee-hamburger {
				display: none;
				padding: 5px 0;
				position: relative;
				top: -4px
			}

			.bee-menu ul.with-bee-hamburger li {
				display: block;
				text-align: center
			}

			.bee-menu ul.with-bee-hamburger li a {
				text-decoration: none
			}

			.bee-menu ul.with-bee-hamburger span {
				display: none
			}

			#bee-hamburger-m121:checked~ul,
			.bee-row-content:not(.no_stack) {
				display: block
			}

			.bee-row-1 .bee-col-2 .bee-block-1 .bee-hamburger-controls {
				width: 36px;
				height: 36px;
				background-color: #432b27;
				border-radius: 50%
			}

			.bee-row-1 .bee-col-2 .bee-block-1 .bee-hamburger-controls span,
			.bee-row-24 .bee-col-2 .bee-block-2 .bee-hamburger-controls span,
			.bee-row-24 .bee-col-3 .bee-block-2 .bee-hamburger-controls span {
				width: 18px;
				height: 18px
			}

			.bee-row-1 .bee-col-2 .bee-block-1 .bee-hamburger-controls span.bee-hamburger-open {
				background-image: url("data:image/svg+xml;base64,PHN2ZyBoZWlnaHQ9IjY0IiB2aWV3Qm94PSIwIDAgNjQgNjQiIHdpZHRoPSI2NCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48ZyBmaWxsPSIjZmZmZmZmIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiPjxyZWN0IGhlaWdodD0iMTIiIHJ4PSI2IiB3aWR0aD0iNjQiLz48cmVjdCBoZWlnaHQ9IjEyIiByeD0iNiIgd2lkdGg9IjY0IiB5PSI1MiIvPjxyZWN0IGhlaWdodD0iMTIiIHJ4PSI2IiB3aWR0aD0iNjQiIHk9IjI2Ii8+PC9nPjwvc3ZnPg==");
				transform: translate(-50%, -50%) scaleY(1)
			}

			.bee-row-1 .bee-col-2 .bee-block-1 .bee-hamburger-controls span.bee-hamburger-close {
				background-image: url("data:image/svg+xml;base64,PHN2ZyBoZWlnaHQ9IjY0IiB2aWV3Qm94PSIwIDAgNjQgNjQiIHdpZHRoPSI2NCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48ZyBmaWxsPSIjZmZmZmZmIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiPjxyZWN0IGhlaWdodD0iMTIiIHJ4PSI2IiB0cmFuc2Zvcm09Im1hdHJpeCgtLjcwNzEwNjc4IC0uNzA3MTA2NzggLjcwNzEwNjc4IC0uNzA3MTA2NzggMzEuOTkxMzc4IDc3LjIzNDAxOSkiIHdpZHRoPSI4MiIgeD0iLTkuMDA4NjIyIiB5PSIyNS45OTEzNzgiLz48cmVjdCBoZWlnaHQ9IjEyIiByeD0iNiIgdHJhbnNmb3JtPSJtYXRyaXgoLS43MDcxMDY3OCAuNzA3MTA2NzggLS43MDcxMDY3OCAtLjcwNzEwNjc4IDc3LjgxOTgwNiAzMi4yMzQwMTkpIiB3aWR0aD0iODIiIHg9Ii04Ljc2NTk4MSIgeT0iMjYuMjM0MDE5Ii8+PC9nPjwvc3ZnPg==");
				transform: translate(-50%, -50%) scaleY(0)
			}

			.bee-row-1 .bee-col-2 .bee-block-1 ul.with-bee-hamburger {
				background-color: #432b27
			}

			.bee-row-1 .bee-col-2 .bee-block-1 ul.with-bee-hamburger li,
			.bee-row-1 .bee-col-2 .bee-block-1 ul.with-bee-hamburger li a {
				color: #fff
			}

			#bee-hamburger-m121:checked~.bee-hamburger-controls .bee-hamburger-open {
				transform: translate(-50%, -50%) scaleY(0)
			}

			#bee-hamburger-m121:checked~.bee-hamburger-controls .bee-hamburger-close {
				transform: translate(-50%, -50%) scaleY(1)
			}

			.bee-row-24 .bee-col-2 .bee-block-2 .bee-hamburger-controls,
			.bee-row-24 .bee-col-3 .bee-block-2 .bee-hamburger-controls {
				width: 36px;
				height: 36px;
				background-color: #d7fff3;
				border-radius: 50%
			}

			.bee-row-24 .bee-col-2 .bee-block-2 .bee-hamburger-controls span.bee-hamburger-open,
			.bee-row-24 .bee-col-3 .bee-block-2 .bee-hamburger-controls span.bee-hamburger-open {
				background-image: url("data:image/svg+xml;base64,PHN2ZyBoZWlnaHQ9IjY0IiB2aWV3Qm94PSIwIDAgNjQgNjQiIHdpZHRoPSI2NCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48ZyBmaWxsPSIjMDAwMDAwIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiPjxyZWN0IGhlaWdodD0iMTIiIHJ4PSI2IiB3aWR0aD0iNjQiLz48cmVjdCBoZWlnaHQ9IjEyIiByeD0iNiIgd2lkdGg9IjY0IiB5PSI1MiIvPjxyZWN0IGhlaWdodD0iMTIiIHJ4PSI2IiB3aWR0aD0iNjQiIHk9IjI2Ii8+PC9nPjwvc3ZnPg==");
				transform: translate(-50%, -50%) scaleY(1)
			}

			.bee-row-24 .bee-col-2 .bee-block-2 .bee-hamburger-controls span.bee-hamburger-close,
			.bee-row-24 .bee-col-3 .bee-block-2 .bee-hamburger-controls span.bee-hamburger-close {
				background-image: url("data:image/svg+xml;base64,PHN2ZyBoZWlnaHQ9IjY0IiB2aWV3Qm94PSIwIDAgNjQgNjQiIHdpZHRoPSI2NCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48ZyBmaWxsPSIjMDAwMDAwIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiPjxyZWN0IGhlaWdodD0iMTIiIHJ4PSI2IiB0cmFuc2Zvcm09Im1hdHJpeCgtLjcwNzEwNjc4IC0uNzA3MTA2NzggLjcwNzEwNjc4IC0uNzA3MTA2NzggMzEuOTkxMzc4IDc3LjIzNDAxOSkiIHdpZHRoPSI4MiIgeD0iLTkuMDA4NjIyIiB5PSIyNS45OTEzNzgiLz48cmVjdCBoZWlnaHQ9IjEyIiByeD0iNiIgdHJhbnNmb3JtPSJtYXRyaXgoLS43MDcxMDY3OCAuNzA3MTA2NzggLS43MDcxMDY3OCAtLjcwNzEwNjc4IDc3LjgxOTgwNiAzMi4yMzQwMTkpIiB3aWR0aD0iODIiIHg9Ii04Ljc2NTk4MSIgeT0iMjYuMjM0MDE5Ii8+PC9nPjwvc3ZnPg==");
				transform: translate(-50%, -50%) scaleY(0)
			}

			.bee-row-24 .bee-col-2 .bee-block-2 ul.with-bee-hamburger,
			.bee-row-24 .bee-col-3 .bee-block-2 ul.with-bee-hamburger {
				background-color: #d7fff3
			}

			.bee-row-24 .bee-col-2 .bee-block-2 ul.with-bee-hamburger li,
			.bee-row-24 .bee-col-2 .bee-block-2 ul.with-bee-hamburger li a,
			.bee-row-24 .bee-col-3 .bee-block-2 ul.with-bee-hamburger li,
			.bee-row-24 .bee-col-3 .bee-block-2 ul.with-bee-hamburger li a {
				color: #000
			}
		}

		.bee-row-21 .bee-col-2 .bee-block-3,
		.bee-row-21 .bee-col-2 .bee-block-3 .bee-button-container {
			text-align: "left"
		}

		.bee-row-21 .bee-col-2 .bee-block-3 form,
		.bee-row-24 .bee-col-4 .bee-block-2 form {
			display: inline-block;
			width: 100%
		}

		.bee-row-21 .bee-col-2 .bee-block-3 div.label,
		.bee-row-21 .bee-col-2 .bee-block-3 label {
			color: #222;
			line-height: 200%;
			text-align: left;
			display: block
		}

		.bee-row-21 .bee-col-2 .bee-block-3 ::-webkit-input-placeholder {
			color: #222
		}

		.bee-row-21 .bee-col-2 .bee-block-3 :-moz-placeholder {
			color: #222
		}

		.bee-row-21 .bee-col-2 .bee-block-3 ::-moz-placeholder {
			color: #222
		}

		.bee-row-21 .bee-col-2 .bee-block-3 :-ms-input-placeholder {
			color: #222
		}

		.bee-row-21 .bee-col-2 .bee-block-3 .bee-field>label:first-child,
		.bee-row-21 .bee-col-2 .bee-block-3 div.label,
		.bee-row-24 .bee-col-4 .bee-block-2 .bee-field>label:first-child,
		.bee-row-24 .bee-col-4 .bee-block-2 div.label {
			padding: 3px
		}

		.bee-row-21 .bee-col-2 .bee-block-3 .bee-field.bee-inline-field input[type=checkbox],
		.bee-row-24 .bee-col-4 .bee-block-2 .bee-field.bee-inline-field input[type=checkbox] {
			position: relative;
			color: purple;
			top: 7px
		}

		.bee-row-21 .bee-col-2 .bee-block-3 input:not([type=checkbox]):not([type=radio]):not([type=image]),
		.bee-row-21 .bee-col-2 .bee-block-3 textarea {
			background-color: #fff;
			border-bottom: 1px solid transparent;
			border-left: 1px solid transparent;
			border-radius: 0;
			border-right: 1px solid transparent;
			border-top: 1px solid transparent;
			color: #222;
			padding: 10px;
			min-height: 52px
		}

		.bee-row-21 .bee-col-2 .bee-block-3 input:not([type=checkbox]):not([type=radio]):focus,
		.bee-row-21 .bee-col-2 .bee-block-3 textarea:focus,
		.bee-row-24 .bee-col-4 .bee-block-2 input:not([type=checkbox]):not([type=radio]):focus,
		.bee-row-24 .bee-col-4 .bee-block-2 textarea:focus {
			outline-color: #f9bdb5
		}

		.bee-row-21 .bee-col-2 .bee-block-3 button {
			background-color: #f9bdb5;
			border-bottom: 0 solid transparent;
			border-left: 0 solid transparent;
			border-radius: 0;
			border-right: 0px solid transparent;
			border-top: 0 solid transparent;
			color: #432b27;
			line-height: 200%;
			padding: 10px 30px;
			width: auto
		}

		.bee-row-24 .bee-col-4 .bee-block-2,
		.bee-row-24 .bee-col-4 .bee-block-2 .bee-button-container {
			text-align: "center"
		}

		.bee-row-24 .bee-col-4 .bee-block-2 div.label,
		.bee-row-24 .bee-col-4 .bee-block-2 label {
			color: #fff;
			line-height: 200%;
			text-align: left;
			display: block
		}

		.bee-row-24 .bee-col-4 .bee-block-2 ::-webkit-input-placeholder {
			color: #222
		}

		.bee-row-24 .bee-col-4 .bee-block-2 :-moz-placeholder {
			color: #222
		}

		.bee-row-24 .bee-col-4 .bee-block-2 ::-moz-placeholder {
			color: #222
		}

		.bee-row-24 .bee-col-4 .bee-block-2 :-ms-input-placeholder {
			color: #222
		}

		.bee-row-24 .bee-col-4 .bee-block-2 input:not([type=checkbox]):not([type=radio]):not([type=image]),
		.bee-row-24 .bee-col-4 .bee-block-2 textarea {
			background-color: #fff;
			border-bottom: 1px solid #fff;
			border-left: 1px solid #fff;
			border-radius: 0;
			border-right: 1px solid #fff;
			border-top: 1px solid #fff;
			color: #222;
			padding: 10px;
			min-height: 52px
		}

		.bee-row-24 .bee-col-4 .bee-block-2 button {
			background-color: #f9bdb5;
			border-bottom: 0 solid transparent;
			border-left: 0 solid transparent;
			border-radius: 0;
			border-right: 0px solid transparent;
			border-top: 0 solid transparent;
			color: #432b27;
			line-height: 200%;
			padding: 10px 25px;
			width: 100%
		}
	</style>
<link type="text/css" rel="stylesheet" charset="UTF-8" href="https://translate.googleapis.com/translate_static/css/translateelement.css"></head>
<body>
<div class="bee-page-container">
<div class="bee-row bee-row-1">
<div class="bee-row-content no_stack">
<div class="bee-col bee-col-1 bee-col-w5">
<div class="bee-block bee-block-1 bee-image"><a href="http://example.com"><img alt="logo" class="bee-fixedwidth" src="images/chocolate_logo.png" style="max-width:284px;"></a></div>
</div>
<div class="bee-col bee-col-2 bee-col-w7">
<div class="bee-block bee-block-1 bee-menu">
<nav class="bee-menu"><input class="bee-hamburger-trigger" id="bee-hamburger-m121" type="checkbox"><label class="bee-hamburger-controls" for="bee-hamburger-m121"><span class="bee-hamburger-open"></span><span class="bee-hamburger-close"></span></label>

</nav>
</div>
</div>
</div>
</div>
<div class="bee-row bee-row-2">
<div class="bee-row-content">
<div class="bee-col bee-col-1 bee-col-w5">
<div class="bee-block bee-block-1 bee-heading">
<h1 style="color:#432b27;direction:ltr;font-family:'Abril Fatface', Arial, 'Helvetica Neue', Helvetica, sans-serif;font-size:72px;font-weight:700;letter-spacing:normal;line-height:120%;text-align:left;margin-top:0;margin-bottom:0;"><span class="tinyMce-placeholder"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Happy Easter!</font></font></span> </h1>
</div>
<div class="bee-block bee-block-2 bee-text">
<div class="bee-text-content" style="font-size: 14px; line-height: 120%; color: #222; font-family: inherit;">
<p style="font-size: 14px; line-height: 16px;"><span style="font-size: 24px; line-height: 28px;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Get 20% off your purchase</font></font></span></p>
</div>
</div>
<div class="bee-block bee-block-3 bee-text">
<div class="bee-text-content" style="font-size: 14px; line-height: 150%; color: #222; font-family: inherit;">
<p style="font-size: 18px; line-height: 27px; text-align: left;"><span style="font-size: 18px; line-height: 27px;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">It is important to take care of the patient, to be followed by the doctor, but it is a time of great pain and suffering.&nbsp;</font></font></span></p>
</div>
</div>
<div class="bee-block bee-block-4 bee-button"><a class="bee-button-content" href="http://example.com" style="font-size: 16px; background-color: #f9bdb5; border-bottom: 0px solid #F9BDB5; border-left: 0px solid #F9BDB5; border-radius: 0px; border-right: 0px solid #F9BDB5; border-top: 0px solid #F9BDB5; color: #432b27; font-family: inherit; font-weight: 400; max-width: 100%; padding-bottom: 10px; padding-left: 30px; padding-right: 30px; padding-top: 10px; width: auto; direction: ltr; display: inline-block;"><span style="word-break: break-word; font-size: 16px; line-height: 200%;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Learn more</font></font></span></a></div>
</div>
<div class="bee-col bee-col-2 bee-col-w7">
<div class="bee-block bee-block-1 bee-image"><img alt="Easter" class="bee-center bee-autowidth" src="images/pexels-photo-2072158-transformed_1.png" style="max-width:746px;"></div>
</div>
</div>
</div>
<div class="bee-row bee-row-3">
<div class="bee-row-content">
<div class="bee-col bee-col-1 bee-col-w12">
<div class="bee-block bee-block-1 bee-spacer">
<div class="spacer" style="height:100px;"></div>
</div>
</div>
</div>
</div>
<div class="bee-row bee-row-4">
<div class="bee-row-content">
<div class="bee-col bee-col-1 bee-col-w5">
<div class="bee-block bee-block-1 bee-image"><img alt="easter" class="bee-center bee-autowidth" src="images/easter.png" style="max-width:473px;"></div>
</div>
<div class="bee-col bee-col-2 bee-col-w7">
<div class="bee-block bee-block-1 bee-heading">
<h2 style="color:#432b27;direction:ltr;font-family:'Abril Fatface', Arial, 'Helvetica Neue', Helvetica, sans-serif;font-size:52px;font-weight:700;letter-spacing:normal;line-height:120%;text-align:left;margin-top:0;margin-bottom:0;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">About the offer</font></font></h2>
</div>
<div class="bee-block bee-block-2 bee-text">
<div class="bee-text-content" style="font-size: 14px; line-height: 150%; color: #222; font-family: inherit;">
<p style="font-size: 18px; line-height: 27px; text-align: left;"><span style="font-size: 18px; line-height: 27px;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">It is important to take care of the patient, to be followed by the doctor, but it is a time of great pain and suffering. </font><font style="vertical-align: inherit;">For to come to the smallest detail, no one should practice any kind of work unless he derives some benefit from it.</font></font></span></p>
</div>
</div>
<div class="bee-block bee-block-3 bee-button"><a class="bee-button-content" href="http://example.com" style="font-size: 16px; background-color: #f9bdb5; border-bottom: 0px solid #F9BDB5; border-left: 0px solid #F9BDB5; border-radius: 0px; border-right: 0px solid #F9BDB5; border-top: 0px solid #F9BDB5; color: #432b27; font-family: inherit; font-weight: 400; max-width: 100%; padding-bottom: 10px; padding-left: 30px; padding-right: 30px; padding-top: 10px; width: auto; direction: ltr; display: inline-block;"><span style="word-break: break-word; font-size: 16px; line-height: 200%;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Learn more</font></font></span></a></div>
</div>
</div>
</div>
<div class="bee-row bee-row-5">
<div class="bee-row-content">
<div class="bee-col bee-col-1 bee-col-w12">
<div class="bee-block bee-block-1 bee-spacer">
<div class="spacer" style="height:60px;"></div>
</div>
</div>
</div>
</div>
<div class="bee-row bee-row-6">
<div class="bee-row-content">
<div class="bee-col bee-col-1 bee-col-w12">
<div class="bee-block bee-block-1 bee-heading">
<h2 style="color:#432b27;direction:ltr;font-family:'Abril Fatface', Arial, 'Helvetica Neue', Helvetica, sans-serif;font-size:52px;font-weight:700;letter-spacing:normal;line-height:120%;text-align:center;margin-top:0;margin-bottom:0;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Easter products</font></font></h2>
</div>
</div>
</div>
</div>
<div class="bee-row bee-row-7">
<div class="bee-row-content">
<div class="bee-col bee-col-1 bee-col-w4">
<div class="bee-block bee-block-1 bee-image"><img alt="chocolate" class="bee-center bee-autowidth" src="images/egg1.png" style="max-width:366px;"></div>
<div class="bee-block bee-block-2 bee-heading">
<h3 style="color:#432b27;direction:ltr;font-family:'Abril Fatface', Arial, 'Helvetica Neue', Helvetica, sans-serif;font-size:28px;font-weight:400;letter-spacing:normal;line-height:120%;text-align:center;margin-top:0;margin-bottom:0;"><span class="tinyMce-placeholder"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Chocolate Egg</font></font></span> </h3>
</div>
<div class="bee-block bee-block-3 bee-text">
<div class="bee-text-content" style="font-size: 14px; line-height: 150%; color: #222; font-family: inherit;">
<p style="font-size: 14px; line-height: 21px; text-align: center;"><span style="font-size: 26px; line-height: 39px;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">$10 </font></font><span style="text-decoration: line-through; font-size: 16px; line-height: 24px;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">$15</font></font></span></span></p>
</div>
</div>
</div>
<div class="bee-col bee-col-2 bee-col-w4">
<div class="bee-block bee-block-1 bee-image"><img alt="chocolate" class="bee-center bee-autowidth" src="images/egg2.png" style="max-width:366px;"></div>
<div class="bee-block bee-block-2 bee-heading">
<h3 style="color:#432b27;direction:ltr;font-family:'Abril Fatface', Arial, 'Helvetica Neue', Helvetica, sans-serif;font-size:28px;font-weight:400;letter-spacing:normal;line-height:120%;text-align:center;margin-top:0;margin-bottom:0;"><span class="tinyMce-placeholder"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Chocolate Egg</font></font></span> </h3>
</div>
<div class="bee-block bee-block-3 bee-text">
<div class="bee-text-content" style="font-size: 14px; line-height: 150%; color: #222; font-family: inherit;">
<p style="font-size: 14px; line-height: 21px; text-align: center;"><span style="font-size: 26px; line-height: 39px;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">$10 </font></font><span style="text-decoration: line-through; font-size: 16px; line-height: 24px;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">$15</font></font></span></span></p>
</div>
</div>
</div>
<div class="bee-col bee-col-3 bee-col-w4">
<div class="bee-block bee-block-1 bee-image"><img alt="chocolate" class="bee-center bee-autowidth" src="images/egg3.png" style="max-width:366px;"></div>
<div class="bee-block bee-block-2 bee-heading">
<h3 style="color:#432b27;direction:ltr;font-family:'Abril Fatface', Arial, 'Helvetica Neue', Helvetica, sans-serif;font-size:28px;font-weight:400;letter-spacing:normal;line-height:120%;text-align:center;margin-top:0;margin-bottom:0;"><span class="tinyMce-placeholder"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Chocolate Egg</font></font></span> </h3>
</div>
<div class="bee-block bee-block-3 bee-text">
<div class="bee-text-content" style="font-size: 14px; line-height: 150%; color: #222; font-family: inherit;">
<p style="font-size: 14px; line-height: 21px; text-align: center;"><span style="font-size: 26px; line-height: 39px;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">$10 </font></font><span style="text-decoration: line-through; font-size: 16px; line-height: 24px;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">$15</font></font></span></span></p>
</div>
</div>
</div>
</div>
</div>
<div class="bee-row bee-row-8">
<div class="bee-row-content">
<div class="bee-col bee-col-1 bee-col-w4">
<div class="bee-block bee-block-1 bee-image"><img alt="chocolate" class="bee-center bee-autowidth" src="images/egg4.png" style="max-width:366px;"></div>
<div class="bee-block bee-block-2 bee-heading">
<h3 style="color:#432b27;direction:ltr;font-family:'Abril Fatface', Arial, 'Helvetica Neue', Helvetica, sans-serif;font-size:28px;font-weight:400;letter-spacing:normal;line-height:120%;text-align:center;margin-top:0;margin-bottom:0;"><span class="tinyMce-placeholder"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Chocolate Egg</font></font></span> </h3>
</div>
<div class="bee-block bee-block-3 bee-text">
<div class="bee-text-content" style="font-size: 14px; line-height: 150%; color: #222; font-family: inherit;">
<p style="font-size: 14px; line-height: 21px; text-align: center;"><span style="font-size: 26px; line-height: 39px;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">$10 </font></font><span style="text-decoration: line-through; font-size: 16px; line-height: 24px;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">$15</font></font></span></span></p>
</div>
</div>
</div>
<div class="bee-col bee-col-2 bee-col-w4">
<div class="bee-block bee-block-1 bee-image"><img alt="chocolate" class="bee-center bee-autowidth" src="images/egg5.png" style="max-width:366px;"></div>
<div class="bee-block bee-block-2 bee-heading">
<h3 style="color:#432b27;direction:ltr;font-family:'Abril Fatface', Arial, 'Helvetica Neue', Helvetica, sans-serif;font-size:28px;font-weight:400;letter-spacing:normal;line-height:120%;text-align:center;margin-top:0;margin-bottom:0;"><span class="tinyMce-placeholder"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Chocolate Egg</font></font></span> </h3>
</div>
<div class="bee-block bee-block-3 bee-text">
<div class="bee-text-content" style="font-size: 14px; line-height: 150%; color: #222; font-family: inherit;">
<p style="font-size: 14px; line-height: 21px; text-align: center;"><span style="font-size: 26px; line-height: 39px;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">$10 </font></font><span style="text-decoration: line-through; font-size: 16px; line-height: 24px;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">$15</font></font></span></span></p>
</div>
</div>
</div>
<div class="bee-col bee-col-3 bee-col-w4">
<div class="bee-block bee-block-1 bee-image"><img alt="chocolate" class="bee-center bee-autowidth" src="images/egg6.png" style="max-width:366px;"></div>
<div class="bee-block bee-block-2 bee-heading">
<h3 style="color:#432b27;direction:ltr;font-family:'Abril Fatface', Arial, 'Helvetica Neue', Helvetica, sans-serif;font-size:28px;font-weight:400;letter-spacing:normal;line-height:120%;text-align:center;margin-top:0;margin-bottom:0;"><span class="tinyMce-placeholder"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Chocolate Eggs Set</font></font></span> </h3>
</div>
<div class="bee-block bee-block-3 bee-text">
<div class="bee-text-content" style="font-size: 14px; line-height: 150%; color: #222; font-family: inherit;">
<p style="font-size: 14px; line-height: 21px; text-align: center;"><span style="font-size: 26px; line-height: 39px;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">$40 </font></font><span style="text-decoration: line-through; font-size: 16px; line-height: 24px;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">$60</font></font></span></span></p>
</div>
</div>
</div>
</div>
</div>
<div class="bee-row bee-row-9">
<div class="bee-row-content">
<div class="bee-col bee-col-1 bee-col-w12">
<div class="bee-block bee-block-1 bee-spacer">
<div class="spacer" style="height:80px;"></div>
</div>
</div>
</div>
</div>
<div class="bee-row bee-row-10">
<div class="bee-row-content">
<div class="bee-col bee-col-1 bee-col-w5">
<div class="bee-block bee-block-1 bee-image"><img alt="chocolate" class="bee-center bee-autowidth" src="images/special-offer.png" style="max-width:533px;"></div>
</div>
<div class="bee-col bee-col-2 bee-col-w7">
<div class="bee-block bee-block-1 bee-spacer">
<div class="spacer" style="height:40px;"></div>
</div>
<div class="bee-block bee-block-2 bee-heading">
<h2 style="color:#432b27;direction:ltr;font-family:'Abril Fatface', Arial, 'Helvetica Neue', Helvetica, sans-serif;font-size:52px;font-weight:700;letter-spacing:normal;line-height:120%;text-align:left;margin-top:0;margin-bottom:0;"><span class="tinyMce-placeholder"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Special Offer</font></font></span> </h2>
</div>
<div class="bee-block bee-block-3 bee-text">
<div class="bee-text-content" style="font-size: 14px; line-height: 150%; color: #222; font-family: inherit;">
<p style="font-size: 18px; line-height: 27px; text-align: left;"><span style="font-size: 18px; line-height: 27px;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">It is important to take care of the patient, to be followed by the doctor, but it is a time of great pain and suffering. </font><font style="vertical-align: inherit;">For to come to the smallest detail, no one should practice any kind of work unless he derives some benefit from it. </font></font></span><span style="font-size: 18px; line-height: 27px;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Do not be angry with the pain in the rebuke, in the pleasure he wants to be a hair from the pain, let him run away from the pain. </font><font style="vertical-align: inherit;">Unless they are blinded by lust, they do not come out; they are in fault who softens the duties of the soul, that is, of labors.</font></font></span></p>
</div>
</div>
<div class="bee-block bee-block-4 bee-button"><a class="bee-button-content" href="http://example.com" style="font-size: 16px; background-color: #f9bdb5; border-bottom: 0px solid #F9BDB5; border-left: 0px solid #F9BDB5; border-radius: 0px; border-right: 0px solid #F9BDB5; border-top: 0px solid #F9BDB5; color: #432b27; font-family: inherit; font-weight: 400; max-width: 100%; padding-bottom: 10px; padding-left: 30px; padding-right: 30px; padding-top: 10px; width: auto; direction: ltr; display: inline-block;"><span style="word-break: break-word; font-size: 16px; line-height: 200%;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Learn more</font></font></span></a></div>
<div class="bee-block bee-block-5 bee-spacer">
<div class="spacer" style="height:40px;"></div>
</div>
</div>
</div>
</div>
<div class="bee-row bee-row-22">
<div class="bee-row-content">
<div class="bee-col bee-col-1 bee-col-w12">
<div class="bee-block bee-block-1 bee-spacer">
<div class="spacer" style="height:110px;"></div>
</div>
</div>
</div>
</div>
<div class="bee-row bee-row-23">
<div class="bee-row-content">
<div class="bee-col bee-col-1 bee-col-w12">
<div class="bee-block bee-block-1 bee-spacer">
<div class="spacer" style="height:80px;"></div>
</div>
</div>
</div>
</div>



</div><div id="goog-gt-tt" class="skiptranslate" dir="ltr"><div style="padding: 8px;"><div><div class="logo"><img src="https://www.gstatic.com/images/branding/product/1x/translate_24dp.png" width="20" height="20" alt="Google Translate"></div></div></div><div class="top" style="padding: 8px; float: left; width: 100%;"><h1 class="title gray">Original text</h1></div><div class="middle" style="padding: 8px;"><div class="original-text"></div></div><div class="bottom" style="padding: 8px;"><div class="activity-links"><span class="activity-link">Contribute a better translation</span><span class="activity-link"></span></div><div class="started-activity-container"><hr style="color: #CCC; background-color: #CCC; height: 1px; border: none;"><div class="activity-root"></div></div></div><div class="status-message" style="display: none;"></div></div>

<div class="goog-te-spinner-pos"><div class="goog-te-spinner-animation"><svg xmlns="http://www.w3.org/2000/svg" class="goog-te-spinner" width="96px" height="96px" viewBox="0 0 66 66"><circle class="goog-te-spinner-path" fill="none" stroke-width="6" stroke-linecap="round" cx="33" cy="33" r="30"></circle></svg></div></div></body></html>
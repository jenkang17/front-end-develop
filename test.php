<html>
<HEAD>
<style>
.scroll-top {
	position: fixed;
	right: 20px;
	bottom: 20px;
	z-index: 100;
	background-color: #999;
	opacity: .8;
	width: 50px;
	height: 50px;
	border-radius: 50%;
	border: none;
	color: #fff;
}
.scroll-top:hover {
	cursor: pointer;
}
</style>
</HEAD>

<body>
    <button class="scroll-top" id="js-button">
    <i class="fa fa-chevron-up" aria-hidden="true">TOP</i>
</button>

<p>1</br></p><p>2</br></p><p>3</br></p><p>4</br></p><p>5</br></p><p>6</br></p><p>7</br></p><p>8</br></p><p>9</br></p><p>10</br></p>
<p>11</br></p><p>12</br></p><p>13</br></p><p>14</br></p><p>15</br></p><p>16</br></p><p>17</br></p><p>18</br></p><p>19</br></p><p>20</br></p>
<p>21</br></p><p>22</br></p><p>23</br></p><p>24</br></p><p>25</br></p>


<script type="text/javascript">
scrollTop('js-button', 500);
function scrollTop(elem,duration) {
    let target = document.getElementById(elem);

    target.addEventListener('click', function() {
        let currentY = window.pageYOffset; 
        let step = duration/currentY > 1 ? 10 : 100;
        let timeStep = duration/currentY * step;
        let intervalID = setInterval(scrollUp, timeStep);

        function scrollUp(){
            currentY = window.pageYOffset;
            if(currentY === 0) {
                clearInterval(intervalID);
            } else {
                scrollBy( 0, -step );
            }
        }
    });
}
</script>
</body>
</html>
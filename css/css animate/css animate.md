#css动画
##css过渡效果
###过渡效果的标准表示方法
<pre><code>
transition-property:width; //过渡效果的名字
transition-duration:2s; //过渡效果持续的时间
transition-timing-function: ease;//过渡效果的动画曲线
transition-delay:0s;//过渡效果的延迟
</code></pre>

###过渡效果的简写方式
`transition:width 2s` //顺序是 名字 时间 动画曲线 延迟 （其中动画曲线和延迟可以不写）

## css动画
###@keyframes
>很像是动画片里面的一秒钟24个画面里面的每一个画面

<pre><code>
@keyframes myfirst
{
0%   {background: red;} /*在时间轴上0%处的属性*/
25%  {background: yellow;}/*在时间轴上25%处的属性*/
50%  {background: blue;}/*在时间轴上50%处的属性*/
100% {background: green;}/*在时间轴上1000%处的属性*/
}
</code></pre>

###动画属性
<pre><code>
animation-name: animate1; /*动画效果的名字*/
animation-duration: 5s; /*动画效果的持续时间*/
animation-timing-function: linear; /*动画效果的动画曲线*/
animation-delay: 2s;/*动画效果的延迟*/
</code></pre>

###动画属性的简写方式

`animation: animate1 5s linear 2s `//顺序是 名字 时间 动画曲线 延迟 （其中动画曲线和延迟可以不写）

#响应式布局
###手机站的viewport属性
`<meta name="viewport" content="width = device-width,initial-scale=1">`
###media query不同尺寸的设备展示不同的css属性
<pre><code>
@media screen and (min-width:640px){ //宽度大于640像素的时候，会展示的代码

}
</code></pre>

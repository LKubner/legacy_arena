<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="theme theme-dark">
  <div class="bracket disable-image">
    <div class="column one">
      <div class="match winner-top">
        <div class="match-top team">
          <span class="image"></span>
          <span class="seed">1</span>
          <span class="name">Orlando Jetsetters</span>
          <span class="score">2</span>
        </div>
        <div class="match-bottom team">
          <span class="image"></span>
          <span class="seed">8</span>
          <span class="name">D.C. Senators</span>
          <span class="score">1</span>
        </div>
        <div class="match-lines">
          <div class="line one"></div>
          <div class="line two"></div>
        </div>
        <div class="match-lines alt">
          <div class="line one"></div>
        </div>
      </div>
      <div class="match winner-bottom">
        <div class="match-top team">
          <span class="image"></span>
          <span class="seed">4</span>
          <span class="name">New Orleans Rockstars</span>
          <span class="score">1</span>
        </div>
        <div class="match-bottom team">
          <span class="image"></span>
          <span class="seed">5</span>
          <span class="name">West Virginia Runners</span>
          <span class="score">2</span>
        </div>
        <div class="match-lines">
          <div class="line one"></div>
          <div class="line two"></div>
        </div>
        <div class="match-lines alt">
          <div class="line one"></div>
        </div>
      </div>
      <div class="match winner-top">
        <div class="match-top team">
          <span class="image"></span>
          <span class="seed">2</span>
          <span class="name">Denver Demon Horses</span>
          <span class="score">2</span>
        </div>
        <div class="match-bottom team">
          <span class="image"></span>
          <span class="seed">7</span>
          <span class="name">Chicago Pistons</span>
          <span class="score">0</span>
        </div>
        <div class="match-lines">
          <div class="line one"></div>
          <div class="line two"></div>
        </div>
        <div class="match-lines alt">
          <div class="line one"></div>
        </div>
      </div>
      <div class="match winner-top">
        <div class="match-top team">
          <span class="image"></span>
          <span class="seed">3</span>
          <span class="name">San Francisco Porters</span>
          <span class="score">2</span>
        </div>
        <div class="match-bottom team">
          <span class="image"></span>
          <span class="seed">6</span>
          <span class="name">Seattle Climbers</span>
          <span class="score">1</span>
        </div>
        <div class="match-lines">
          <div class="line one"></div>
          <div class="line two"></div>
        </div>
        <div class="match-lines alt">
          <div class="line one"></div>
        </div>
      </div>
    </div>
    <div class="column two">
      <div class="match winner-bottom">
        <div class="match-top team">
          <span class="image"></span>
          <span class="seed">1</span>
          <span class="name">Orlando Jetsetters</span>
          <span class="score">1</span>
        </div>
        <div class="match-bottom team">
          <span class="image"></span>
          <span class="seed">5</span>
          <span class="name">West Virginia Runners</span>
          <span class="score">2</span>
        </div>
        <div class="match-lines">
          <div class="line one"></div>
          <div class="line two"></div>
        </div>
        <div class="match-lines alt">
          <div class="line one"></div>
        </div>
      </div>
      <div class="match winner-bottom">
        <div class="match-top team">
          <span class="image"></span>
          <span class="seed">2</span>
          <span class="name">Denver Demon Horses</span>
          <span class="score">1</span>
        </div>
        <div class="match-bottom team">
          <span class="image"></span>
          <span class="seed">3</span>
          <span class="name">San Francisco Porters</span>
          <span class="score">2</span>
        </div>
        <div class="match-lines">
          <div class="line one"></div>
          <div class="line two"></div>
        </div>
        <div class="match-lines alt">
          <div class="line one"></div>
        </div>
      </div>
    </div>
    <div class="column three">
      <div class="match winner-top">
        <div class="match-top team">
          <span class="image"></span>
          <span class="seed">5</span>
          <span class="name">West Virginia Runners</span>
          <span class="score">3</span>
        </div>
        <div class="match-bottom team">
          <span class="image"></span>
          <span class="seed">3</span>
          <span class="name">San Francisco Porters</span>
          <span class="score">2</span>
        </div>
        <div class="match-lines">
          <div class="line one"></div>
          <div class="line two"></div>
        </div>
        <div class="match-lines alt">
          <div class="line one"></div>
        </div>
      </div>        
    </div>
  </div>
</div>

</body>
</html>
















<style> 
.theme {
  height: 100%;
  width: 100%;
  position: relative;
  background-color: #f1f1f1;
}
.bracket {
  padding: 40px;
  margin: 5px;
}
.bracket {
  display: flex;
  flex-direction: row;
  position: relative;
}
.column {
  display: flex;
  flex-direction: column;
  min-height: 100%;
  justify-content: space-around;
  align-content: center;
}
.match {
  position: relative;
  display: flex;
  flex-direction: column;
  min-width: 240px;
  max-width: 240px;
  height: 62px;
  margin: 12px 24px 12px 0;
}
.match .match-top {
  border-radius: 2px 2px 0 0;
}
.match .match-bottom {
  border-radius: 0 0 2px 2px;
}
.match .team {
  display: flex;
  align-items: center;
  width: 100%;
  height: 100%;
  border: 1px solid black;
  position: relative;
}
.match .team span {
  padding-left: 8px;
}
.match .team span:last-child {
  padding-right: 8px;
}
.match .team .score {
  margin-left: auto;
}
.match .team:first-child {
  margin-bottom: -1px;
}
.match-lines {
  display: block;
  position: absolute;
  top: 50%;
  bottom: 0;
  margin-top: 0px;
  right: -1px;
}
.match-lines .line {
  background: red;
  position: absolute;
}
.match-lines .line.one {
  height: 1px;
  width: 12px;
}
.match-lines .line.two {
  height: 44px;
  width: 1px;
  left: 11px;
}
.match-lines.alt {
  left: -12px;
}
.match:nth-child(even) .match-lines .line.two {
  transform: translate(0, -100%);
}
.column:first-child .match-lines.alt {
  display: none;
}
.column:last-child .match-lines {
  display: none;
}
.column:last-child .match-lines.alt {
  display: block;
}
.column:nth-child(2) .match-lines .line.two {
  height: 88px;
}
.column:nth-child(3) .match-lines .line.two {
  height: 175px;
}
.column:nth-child(4) .match-lines .line.two {
  height: 262px;
}
.column:nth-child(5) .match-lines .line.two {
  height: 349px;
}
.disable-image .image,
.disable-seed .seed,
.disable-name .name,
.disable-score .score {
  display: none !important;
}
.disable-borders {
  border-width: 0px !important;
}
.disable-borders .team {
  border-width: 0px !important;
}
.disable-seperator .match-top {
  border-bottom: 0px !important;
}
.disable-seperator .match-bottom {
  border-top: 0px !important;
}
.disable-seperator .team:first-child {
  margin-bottom: 0px;
} </style>
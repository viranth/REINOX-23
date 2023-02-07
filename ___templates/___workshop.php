<br>
<style>
  /* .Wrapper {
  Position: Absolute;
  Transform: Translate(-50%, -50%);
  Top: 50%;
  Left: 50%;
  Font-Size: 16px;
} */
.Heading {
  Text-Align: Center;
  Margin-Bottom: 4em;
}
.Heading H1 {
  Text-Shadow: Var(--Color-Shadow);
  Font-Size: 6.2em;
  Font-Weight: 800;
  Letter-Spacing: 0.15em;
}
.Heading H3 {
  Font-Size: 1.6em;
  Letter-Spacing: 0.05em;
  Text-Transform: Uppercase;
  Font-Weight: 600;
  Background-Color: Var(--Color-Glass);
  Backdrop-Filter: Blur(12px);
  Box-Shadow: Var(--Color-Shadow);
  Padding: 8px 30px;
  Display: Inline-Block;
}
.Countdown {
  Width: 95vw;
  Display: Flex;
  Justify-Content: Space-Around;
  Gap: 10px;
}
.Box {
  Width: 28vmin;
  Height: 29vmin;
  Display: Flex;
  Flex-Direction: Column;
  Align-Items: Center;
  Justify-Content: Space-Evenly;
  Position: Relative;
}
Span.Num {
  Background-Color: Var(--Color-Glass);
  Backdrop-Filter: Blur(12px);
  Height: 100%;
  Width: 100%;
  Display: Grid;
  Place-Items: Center;
  Font-Size: 4em;
  Box-Shadow: Var(--Color-Shadow);
  Border-Radius: 0.1em;
}
Span.Num:after {
  Content: "";
  Position: Absolute;
  Background-Color: Var(--Color-Glass);
  Height: 100%;
  Width: 50%;
  Left: 0;
}
Span.Text {
  Font-Size: 1em;
  Background-Color: Var(--Color-White);
  Color: Var(--Color-Black);
  Display: Block;
  Width: 80%;
  Position: Relative;
  Text-Align: Center;
  Bottom: 20px;
  Padding: 0.7em 0;
  Font-Weight: 600;
  Border-Radius: 0.3em;
  Box-Shadow: Var(--Color-Shadow);
}
</style>
<div class="container">
<Div Class="Wrapper">
      <Div Class="Heading">
        <H3>Countdown Till</H3>
        <H1>2023</H1>
      </Div>
      <Div Class="Countdown">
        <Div Class="Box">
          <Span Class="Num" Id="Day-Box">00</Span>
          <Span Class="Text">Days</Span>
        </Div>
        <Div Class="Box">
          <Span Class="Num" Id="Hr-Box">00</Span>
          <Span Class="Text">Hours</Span>
        </Div>
        <Div Class="Box">
          <Span Class="Num" Id="Min-Box">00</Span>
          <Span Class="Text">Minutes</Span>
        </Div>
        <Div Class="Box">
          <Span Class="Num" Id="Sec-Box">00</Span>
          <Span Class="Text">Seconds</Span>
        </Div>
      </Div>
    </Div>
    <!-- Script -->
    <Script Src="Script.Js"></Script>
    </div>
<br><br>


<script>
  Let DayBox = Document.GetElementById("Day-Box");
Let HrBox = Document.GetElementById("Hr-Box");
Let MinBox = Document.GetElementById("Min-Box");
Let SecBox = Document.GetElementById("Sec-Box");
Let EndDate = New Date(2023, 0, 1, 00, 00);
Let EndTime = EndDate.GetTime();

Function Countdown() {
  Let TodayDate = New Date();
  Let TodayTime = TodayDate.GetTime();
  Let RemainingTime = EndTime - TodayTime;
  Let OneMin = 60 * 1000;
  Let OneHr = 60 * OneMin;
  Let OneDay = 24 * OneHr;

  Let AddZeroes = (Num) => (Num < 10 ? `0${Num}` : Num);

  If (EndTime < TodayTime) {
    ClearInterval(I);
    Document.QuerySelector(
      ".Countdown"
    ).InnerHTML = `<H1>Countdown Has Expired</H1>`;
  } Else {
    Let DaysLeft = Math.Floor(RemainingTime / OneDay);
    Let HrsLeft = Math.Floor((RemainingTime % OneDay) / OneHr);
    Let MinsLeft = Math.Floor((RemainingTime % OneHr) / OneMin);
    Let SecsLeft = Math.Floor((RemainingTime % OneMin) / 1000);

    DayBox.TextContent = AddZeroes(DaysLeft);
    HrBox.TextContent = AddZeroes(HrsLeft);
    MinBox.TextContent = AddZeroes(MinsLeft);
    SecBox.TextContent = AddZeroes(SecsLeft);
  }
}

Let I = SetInterval(Countdown, 1000);
Countdown();
  
//   const endDate = "10 February 2023 10:00:00 AM"

// document.getElementById("end-date").innerText = endDate;
// const inputs = document.querySelectorAll("input")


// function clock() {
//     const end = new Date(endDate)
//     const now = new Date()
//     const diff = (end - now) / 1000;

//     if (diff < 0) return;

//     // convert into days;
//     inputs[0].value = Math.floor(diff / 3600 / 24);
//     inputs[1].value = Math.floor(diff / 3600) % 24;
//     inputs[2].value = Math.floor(diff / 60) % 60;
//     inputs[3].value = Math.floor(diff) % 60;
// }

// clock()
// setInterval(
//     () => {
//         clock()
//     },
//     1000
// )
</script>
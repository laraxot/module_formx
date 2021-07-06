<<<<<<< HEAD
<p>Example of the range selection</p>

<ngb-datepicker #dp ngModel (ngModelChange)="onDateChange($event)" [displayMonths]="2" [dayTemplate]="t">
</ngb-datepicker>

<ng-template #t let-date="date" let-focused="focused">
  <span class="custom-day"
        [class.focused]="focused"
        [class.range]="isFrom(date) || isTo(date) || isInside(date) || isHovered(date)"
        [class.faded]="isHovered(date) || isInside(date)"
        (mouseenter)="hoveredDate = date"
        (mouseleave)="hoveredDate = null">
    {{ date.day }}
  </span>
</ng-template>

<hr>

<pre>From: {{ fromDate | json }} </pre>
=======
<p>Example of the range selection</p>

<ngb-datepicker #dp ngModel (ngModelChange)="onDateChange($event)" [displayMonths]="2" [dayTemplate]="t">
</ngb-datepicker>

<ng-template #t let-date="date" let-focused="focused">
  <span class="custom-day"
        [class.focused]="focused"
        [class.range]="isFrom(date) || isTo(date) || isInside(date) || isHovered(date)"
        [class.faded]="isHovered(date) || isInside(date)"
        (mouseenter)="hoveredDate = date"
        (mouseleave)="hoveredDate = null">
    {{ date.day }}
  </span>
</ng-template>

<hr>

<pre>From: {{ fromDate | json }} </pre>
>>>>>>> 84b1e510c2e9ebc238a2d8cf0355c08037f3cc0b
<pre>To: {{ toDate | json }} </pre>
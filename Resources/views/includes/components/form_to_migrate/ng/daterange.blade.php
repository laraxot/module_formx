<<<<<<< HEAD
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
>>>>>>> 2393d3fda39ca4bd5aa64102bc85e8ce40f6b5ea
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
>>>>>>> 2393d3fda39ca4bd5aa64102bc85e8ce40f6b5ea
<pre>To: {{ toDate | json }} </pre>
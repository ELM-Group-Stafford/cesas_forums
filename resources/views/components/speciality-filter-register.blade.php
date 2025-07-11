@php $old_speciality = ''; @endphp
@php $speciality_count = 0; @endphp

<span><br /><h2>{{ trans('forms.disease_filters') }}</h2></span>
<span class="grid-item m-t-sm"></span>

@foreach ($availableSpecialities as $availableSpeciality)
    @if($availableSpeciality->speciality_name <> $old_speciality)
        <div class="grid-item m-t-sm">
            <h3>{{ $availableSpeciality->speciality_name }}</h3>  
        
            @if($availableSpecialityCountArray[$availableSpeciality->speciality_id] > 2)
            <div>
                <input type="checkbox" 
                    class="form-group-radio-control field-disease" 
                    name="spec_{{ $availableSpeciality->speciality_id }}" 
                    id="spec_{{ $availableSpeciality->speciality_id }}"                     
                    onClick="selectAllR(this.id)" disabled>
                <span>{{ trim(trans('general.select_all')) }}</span>
            </div>   
            @endif
        @php $old_speciality = $availableSpeciality->speciality_name; @endphp      
    @endif
    
    <div>
        <input type="checkbox" 
            name="disease[{{ $availableSpeciality->area_id }}]" 
            id="area_{{ $availableSpeciality->area_id }}"
            class="spec_{{ $availableSpeciality->speciality_id }} field-disease" 
            onClick="selectAreaR(this.id, 'spec_{{ $availableSpeciality->speciality_id }}')" disabled>
        <span> {{ $availableSpeciality->area_name }}</span>
    </div>

    @php $speciality_count++; @endphp

    @if($availableSpecialityCountArray[$availableSpeciality->speciality_id] == $speciality_count)
        </div>
        @php $speciality_count = 0; @endphp
    @endif

    @php $old_speciality = $availableSpeciality->speciality_name; @endphp    
@endforeach

@if(count($availableSpecialityCountArray) %2 <> 0)
    <div class="grid-item m-t-sm" style="border:0px solid black;"></div>
@endif

<br />
<div class="grid-item m-t-sm" style="border:0px solid black;"></div>
<div class="grid-item m-t-sm" style="border:0px solid black;"></div>

<script type="application/javascript">

function selectAllR(inval){
    var areas = document.getElementsByClassName(inval);
    for (var i = 0; i < areas.length; i++) {
        document.getElementById(areas[i].id).checked = document.getElementById(inval).checked;
    }
}

function selectAreaR(inval1, inval2) {
    var checkedCount = 0;   
    var areas = document.getElementsByClassName(inval2);

    for (var i = 0; i < areas.length; i++) {
        if(document.getElementById(areas[i].id).checked){
            checkedCount++;
        }
    }

    var element = document.getElementById(inval2);
    if (typeof(element) != 'undefined' && element != null) {
        if(areas.length == checkedCount){
            document.getElementById(inval2).checked = true;
        }else{
            document.getElementById(inval2).checked = false;
        }
    }
}

</script>
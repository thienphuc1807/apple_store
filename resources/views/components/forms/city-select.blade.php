<div class="space-y-4">
    <select class="w-full min-h-12 border border-[#EBEBEB] rounded-lg px-4 py-2" name="city" id="city" aria-label=".form-select-sm">
      <option value="" selected>Chọn tỉnh thành</option>    
    </select>
    @error('city')
      <span class="text-red-500">{{ $message }}</span>
    @enderror 

    <div class="flex gap-4 md:flex-row flex-col">    
      <div class="flex flex-1 flex-col">
        <select class=" min-h-12 border border-[#EBEBEB] rounded-lg px-4 py-2" name="district" id="district" aria-label=".form-select-sm">
          <option value="" selected>Chọn quận huyện</option>
        </select>
        @error('district')
        <span class="text-red-500">{{ $message }}</span>
        @enderror  
      </div>
      <div class="flex flex-1 flex-col">
        <select class="flex-1 min-h-12 border border-[#EBEBEB] rounded-lg px-4 py-2" name="ward" id="ward" aria-label=".form-select-sm">
          <option value="" selected>Chọn phường xã</option>
        </select>
        @error('ward')
        <span class="text-red-500">{{ $message }}</span>
        @enderror   
      </div>
    </div>
</div>   

<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js"></script>
<script>
    var citis = document.getElementById("city");
    var districts = document.getElementById("district");
    var wards = document.getElementById("ward");

    var Parameter = {
        url: "https://raw.githubusercontent.com/kenzouno1/DiaGioiHanhChinhVN/master/data.json",
        method: "GET",
        responseType: "application/json",
    };

    var promise = axios(Parameter);

    promise
        .then(function (result) {
            renderCity(result.data);
            setOldValues(result.data);
        })
        .catch(function (error) {
            console.error('Error loading data:', error);
            alert('Không thể tải dữ liệu. Vui lòng thử lại sau.');
        });

    function renderCity(data) {
        for (const x of data) {
            citis.options[citis.options.length] = new Option(x.Name, x.Name);
        }

        citis.onchange = function () {
            resetOptions(districts);
            resetOptions(wards);
            if (this.value != "") {
                const result = data.filter((n) => n.Name === this.value);
                for (const k of result[0].Districts) {
                    districts.options[districts.options.length] = new Option(k.Name, k.Name);
                }
            }
        };

        districts.onchange = function () {
            resetOptions(wards);
            const dataCity = data.filter((n) => n.Name === citis.value);
            if (this.value != "") {
                const dataWards = dataCity[0].Districts.filter((n) => n.Name === this.value)[0].Wards;
                for (const w of dataWards) {
                    wards.options[wards.options.length] = new Option(w.Name, w.Name);
                }
            }
        };
    }

    function resetOptions(dropdown) {
        dropdown.length = 1; // Keep only the placeholder option
    }

    function setOldValues(data) {
        const oldCity = "{{ old('city') }}";
        const oldDistrict = "{{ old('district') }}";
        const oldWard = "{{ old('ward') }}";

        if (oldCity) {
            citis.value = oldCity;
            const result = data.filter((n) => n.Name === oldCity);
            if (result.length > 0) {
                for (const k of result[0].Districts) {
                    districts.options[districts.options.length] = new Option(k.Name, k.Name);
                }
            }
        }

        if (oldDistrict) {
            districts.value = oldDistrict;
            const dataCity = data.filter((n) => n.Name === oldCity);
            if (dataCity.length > 0) {
                const dataWards = dataCity[0].Districts.filter((n) => n.Name === oldDistrict)[0].Wards;
                for (const w of dataWards) {
                    wards.options[wards.options.length] = new Option(w.Name, w.Name);
                }
            }
        }

        if (oldWard) {
            wards.value = oldWard;
        }
    }
</script>

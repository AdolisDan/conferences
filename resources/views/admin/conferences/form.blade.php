<div class="mb-3">
    <label for="title" class="form-label">Pavadinimas</label>
    <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" required value="{{ old('title', $conference->title ?? '') }}">
    @error('title')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="mb-3">
    <label for="description" class="form-label">Aprašymas</label>
    <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" rows="3" required>{{ old('description', $conference->description ?? '') }}</textarea>
    @error('description')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="mb-3">
    <label for="lecturers" class="form-label">Lektoriai</label>
    <input type="text" class="form-control @error('lecturers') is-invalid @enderror" id="lecturers" name="lecturers" required value="{{ old('lecturers', $conference->lecturers ?? '') }}">
    @error('lecturers')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="mb-3">
    <label for="date" class="form-label">Data</label>
    <input type="date" class="form-control @error('date') is-invalid @enderror" id="date" name="date" required value="{{ old('date', $conference->date ?? '') }}">
    @error('date')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="mb-3">
    <label for="time" class="form-label">Laikas</label>
    <input type="time" class="form-control @error('time') is-invalid @enderror" id="time" name="time" required value="{{ old('time', $conference->time ?? '') }}">
    @error('time')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="mb-3">
    <label for="address" class="form-label">Adresas</label>
    <input type="text" class="form-control @error('address') is-invalid @enderror" id="address" name="address" required value="{{ old('address', $conference->address ?? '') }}">
    @error('address')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

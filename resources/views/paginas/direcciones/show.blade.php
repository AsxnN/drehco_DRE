<!-- filepath: c:\Users\liliana\Desktop\Sistemas DRE\drehco\resources\views\paginas\direcciones\show.blade.php -->
@extends('principal.plantilla')
@section('title', $direccion->nombre . ' - DRE Huánuco')

@section('content')
<style>
/* Estilos empresariales sobrios */
.enterprise-container {
    background: #f5f7fa;
    min-height: 100vh;
}

.content-wrapper {
    background: #ffffff;
    min-height: calc(100vh - 80px);
    margin: 40px 20px;
    border-radius: 12px;
    box-shadow: 0 4px 16px rgba(0, 0, 0, 0.08);
    overflow: hidden;
}

.header-section {
    background: #2d3748;
    padding: 40px 0;
    position: relative;
}

.header-section::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    height: 3px;
    background: #4a5568;
}

.header-content {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
    display: flex;
    align-items: center;
    color: white;
}

.header-icon {
    width: 70px;
    height: 70px;
    background: #4a5568;
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-right: 24px;
    border: 1px solid #718096;
}

.header-title {
    font-size: 28px;
    font-weight: 600;
    margin: 0 0 6px 0;
    letter-spacing: -0.25px;
}

.header-subtitle {
    font-size: 15px;
    opacity: 0.8;
    margin: 0;
}

.main-content {
    max-width: 1200px;
    margin: 0 auto;
    padding: 32px 20px;
    display: grid;
    grid-template-columns: 280px 1fr;
    gap: 32px;
}

/* Sidebar empresarial */
.enterprise-sidebar {
    background: white;
    border-radius: 8px;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.06);
    border: 1px solid #e2e8f0;
    overflow: hidden;
    height: fit-content;
    position: sticky;
    top: 32px;
}

.sidebar-header {
    background: #4a5568;
    color: white;
    padding: 20px;
    font-size: 16px;
    font-weight: 500;
    display: flex;
    align-items: center;
}

.sidebar-header i {
    margin-right: 8px;
    font-size: 16px;
}

.sidebar-nav {
    max-height: 450px;
    overflow-y: auto;
}

.nav-item {
    display: block;
    padding: 16px 20px;
    text-decoration: none;
    color: #4a5568;
    border-bottom: 1px solid #e2e8f0;
    transition: all 0.2s ease;
    position: relative;
}

.nav-item:hover {
    background: #f7fafc;
    color: #2d3748;
    text-decoration: none;
    transform: translateX(2px);
}

.nav-item.active {
    background: #edf2f7;
    color: #2d3748;
    border-left: 3px solid #4a5568;
    font-weight: 500;
}

.nav-item-title {
    font-size: 14px;
    font-weight: 500;
    margin-bottom: 4px;
    display: flex;
    align-items: center;
}

.nav-item-title i {
    margin-right: 6px;
    font-size: 10px;
    color: #a0aec0;
}

.nav-item-desc {
    font-size: 12px;
    color: #718096;
    line-height: 1.3;
}

/* Área de contenido */
.content-area {
    background: white;
    border-radius: 8px;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.06);
    border: 1px solid #e2e8f0;
    overflow: hidden;
}

.area-header {
    background: #f7fafc;
    padding: 24px;
    border-bottom: 1px solid #e2e8f0;
}

.area-title {
    font-size: 24px;
    font-weight: 600;
    color: #2d3748;
    margin: 0 0 6px 0;
    display: flex;
    align-items: center;
    justify-content: space-between;
}

.status-badge {
    background: #4a5568;
    color: white;
    padding: 4px 12px;
    border-radius: 12px;
    font-size: 11px;
    font-weight: 500;
}

.area-description {
    background: white;
    border: 1px solid #e2e8f0;
    border-radius: 6px;
    padding: 20px;
    margin: 16px 0;
    color: #4a5568;
    line-height: 1.6;
}

.images-section {
    padding: 24px;
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: 20px;
}

.image-card {
    background: #f7fafc;
    border-radius: 8px;
    padding: 16px;
    border: 1px solid #e2e8f0;
}

.image-card h3 {
    font-size: 15px;
    font-weight: 600;
    color: #2d3748;
    margin-bottom: 12px;
    display: flex;
    align-items: center;
}

.image-card h3 i {
    margin-right: 6px;
    color: #4a5568;
}

.image-card img {
    width: 100%;
    height: 180px;
    object-fit: cover;
    border-radius: 6px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.06);
    transition: transform 0.2s ease;
}

.image-card img:hover {
    transform: scale(1.01);
}

/* Carousel de recursos */
.resources-carousel {
    background: #2d3748;
    padding: 32px 0;
    margin-top: 32px;
}

.carousel-container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
}

.carousel-header {
    text-align: center;
    color: white;
    margin-bottom: 32px;
}

.carousel-header h3 {
    font-size: 22px;
    font-weight: 600;
    margin: 0 0 6px 0;
}

.carousel-header p {
    font-size: 14px;
    opacity: 0.8;
    margin: 0;
}

.carousel-wrapper {
    position: relative;
    overflow: hidden;
    border-radius: 8px;
}

.carousel-track {
    display: flex;
    transition: transform 0.4s ease;
}

.carousel-slide {
    min-width: 100%;
    display: flex;
    justify-content: center;
    gap: 16px;
    padding: 0 16px;
}

.resource-card {
    background: white;
    border-radius: 8px;
    padding: 20px;
    width: 280px;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
    border: 1px solid #e2e8f0;
    transition: transform 0.2s ease;
}

.resource-card:hover {
    transform: translateY(-2px);
}

.resource-icon {
    width: 50px;
    height: 50px;
    background: #4a5568;
    border-radius: 8px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 12px;
}

.resource-icon i {
    color: white;
    font-size: 20px;
}

.resource-card h4 {
    font-size: 16px;
    font-weight: 600;
    color: #2d3748;
    margin: 0 0 6px 0;
}

.resource-card p {
    color: #718096;
    font-size: 13px;
    line-height: 1.4;
    margin: 0 0 14px 0;
}

.resource-btn {
    background: #4a5568;
    color: white;
    padding: 8px 16px;
    border-radius: 6px;
    text-decoration: none;
    font-weight: 500;
    font-size: 13px;
    display: inline-flex;
    align-items: center;
    transition: all 0.2s ease;
}

.resource-btn:hover {
    background: #2d3748;
    transform: translateY(-1px);
    text-decoration: none;
    color: white;
}

.resource-btn i {
    margin-right: 6px;
}

/* Indicadores del carousel */
.carousel-indicators {
    display: flex;
    justify-content: center;
    margin-top: 24px;
    gap: 6px;
}

.indicator {
    width: 10px;
    height: 10px;
    border-radius: 50%;
    background: rgba(255, 255, 255, 0.3);
    cursor: pointer;
    transition: all 0.2s ease;
}

.indicator.active {
    background: white;
    transform: scale(1.1);
}

/* Responsive */
@media (max-width: 1024px) {
    .main-content {
        grid-template-columns: 1fr;
        gap: 24px;
    }
    
    .carousel-slide {
        flex-direction: column;
        align-items: center;
    }
    
    .resource-card {
        width: 260px;
    }
}

/* Scrollbar personalizado */
.sidebar-nav::-webkit-scrollbar {
    width: 4px;
}

.sidebar-nav::-webkit-scrollbar-track {
    background: #f1f5f9;
}

.sidebar-nav::-webkit-scrollbar-thumb {
    background: #cbd5e1;
    border-radius: 2px;
}

.sidebar-nav::-webkit-scrollbar-thumb:hover {
    background: #94a3b8;
}
</style>

<div class="enterprise-container">
    <div class="content-wrapper">
        <!-- Header empresarial -->
        <div class="header-section">
            <div class="header-content">
                <div class="header-icon">
                    <i class="fas fa-building" style="color: white; font-size: 28px;"></i>
                </div>
                <div>
                    <h1 class="header-title">{{ $direccion->nombre }}</h1>
                    <p class="header-subtitle">Dirección Regional de Educación Huánuco</p>
                </div>
            </div>
        </div>

        <div class="main-content">
            <!-- Sidebar empresarial -->
            <aside class="enterprise-sidebar">
                <div class="sidebar-header">
                    <i class="fas fa-list"></i>
                    Áreas Organizacionales
                </div>
                <nav class="sidebar-nav">
                    @if($direccion->areasMenu && $direccion->areasMenu->count() > 0)
                        @foreach($direccion->areasMenu as $area)
                            <a href="/menus/paginaweb/{{ $direccion->idpagina }}?area={{ $area->slug }}" 
                               class="nav-item {{ $area_actual && $area_actual->id === $area->id ? 'active' : '' }}">
                                <div class="nav-item-title">
                                    <i class="fas fa-chevron-right"></i>
                                    {{ $area->nombre }}
                                </div>
                                @if($area->descripcion)
                                    <div class="nav-item-desc">
                                        {{ Str::limit($area->descripcion, 60) }}
                                    </div>
                                @endif
                            </a>
                        @endforeach
                    @else
                        <div style="padding: 32px 20px; text-align: center; color: #718096;">
                            <i class="fas fa-info-circle" style="font-size: 20px; margin-bottom: 6px;"></i>
                            <p style="margin: 0; font-size: 13px;">No hay áreas configuradas</p>
                        </div>
                    @endif
                </nav>
            </aside>

            <!-- Contenido principal -->
            <main class="content-area">
                @if($area_actual)
                    <div class="area-header">
                        <h2 class="area-title">
                            {{ $area_actual->nombre }}
                            <span class="status-badge">
                                {{ $area_actual->activo ? 'Operativo' : 'Inactivo' }}
                            </span>
                        </h2>
                        
                        @if($area_actual->descripcion)
                            <div class="area-description">
                                {!! nl2br(e($area_actual->descripcion)) !!}
                            </div>
                        @endif
                    </div>

                    @if($area_actual->imagen_funcionario || $area_actual->imagen_organigrama)
                        <div class="images-section">
                            @if($area_actual->imagen_funcionario)
                                <div class="image-card">
                                    <h3>
                                        <i class="fas fa-user-tie"></i>
                                        Responsable del Área
                                    </h3>
                                    <img src="{{ url($area_actual->imagen_funcionario) }}" 
                                         alt="Funcionario a cargo"
                                         onerror="this.src='{{ url('img/default/no-image.png') }}'">
                                </div>
                            @endif

                            @if($area_actual->imagen_organigrama)
                                <div class="image-card">
                                    <h3>
                                        <i class="fas fa-sitemap"></i>
                                        Estructura Organizacional
                                    </h3>
                                    <img src="{{ url($area_actual->imagen_organigrama) }}" 
                                         alt="Organigrama" 
                                         style="cursor: pointer;"
                                         onclick="openModal(this.src)"
                                         onerror="this.src='{{ url('img/default/no-image.png') }}'">
                                </div>
                            @endif
                        </div>
                    @endif

                    <!-- Mostrar enlaces de descarga si existen -->
                    @if($area_actual->link_descarga_1 || $area_actual->link_descarga_2)
                        <div style="padding: 24px; border-top: 1px solid #e2e8f0; background: #f7fafc;">
                            <h3 style="font-size: 16px; font-weight: 600; color: #2d3748; margin-bottom: 16px; display: flex; align-items: center;">
                                <i class="fas fa-download" style="margin-right: 8px; color: #4a5568;"></i>
                                Documentos del Área
                            </h3>
                            
                            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 12px;">
                                @if($area_actual->link_descarga_1)
                                    <div style="background: white; border: 1px solid #e2e8f0; border-radius: 6px; padding: 16px; display: flex; justify-content: space-between; align-items: center;">
                                        <div>
                                            <h4 style="color: #2d3748; font-weight: 500; margin: 0 0 4px 0; font-size: 14px;">
                                                {{ $area_actual->texto_descarga_1 ?: 'Documento 1' }}
                                            </h4>
                                            <p style="color: #718096; font-size: 12px; margin: 0;">Documento oficial</p>
                                        </div>
                                        <a href="{{ $area_actual->link_descarga_1 }}" 
                                           target="_blank"
                                           style="background: #4a5568; color: white; padding: 6px 12px; border-radius: 4px; font-weight: 500; text-decoration: none; display: flex; align-items: center; font-size: 12px;">
                                            <i class="fas fa-download" style="margin-right: 4px;"></i>
                                            Descargar
                                        </a>
                                    </div>
                                @endif

                                @if($area_actual->link_descarga_2)
                                    <div style="background: white; border: 1px solid #e2e8f0; border-radius: 6px; padding: 16px; display: flex; justify-content: space-between; align-items: center;">
                                        <div>
                                            <h4 style="color: #2d3748; font-weight: 500; margin: 0 0 4px 0; font-size: 14px;">
                                                {{ $area_actual->texto_descarga_2 ?: 'Documento 2' }}
                                            </h4>
                                            <p style="color: #718096; font-size: 12px; margin: 0;">Documento oficial</p>
                                        </div>
                                        <a href="{{ $area_actual->link_descarga_2 }}" 
                                           target="_blank"
                                           style="background: #4a5568; color: white; padding: 6px 12px; border-radius: 4px; font-weight: 500; text-decoration: none; display: flex; align-items: center; font-size: 12px;">
                                            <i class="fas fa-download" style="margin-right: 4px;"></i>
                                            Descargar
                                        </a>
                                    </div>
                                @endif
                            </div>
                        </div>
                    @endif
                @else
                    <div style="padding: 60px 32px; text-align: center;">
                        <i class="fas fa-mouse-pointer" style="font-size: 48px; color: #cbd5e1; margin-bottom: 20px;"></i>
                        <h3 style="font-size: 20px; font-weight: 600; color: #2d3748; margin-bottom: 8px;">
                            Seleccione un Área Organizacional
                        </h3>
                        <p style="color: #718096; margin-bottom: 24px; font-size: 14px;">
                            Explore las diferentes áreas de nuestra dirección haciendo clic en el menú lateral.
                        </p>
                        <div style="display: flex; flex-wrap: wrap; justify-content: center; gap: 8px;">
                            @foreach($direccion->areasMenu as $area)
                                <a href="/menus/paginaweb/{{ $direccion->idpagina }}?area={{ $area->slug }}" 
                                   style="background: #edf2f7; color: #4a5568; padding: 8px 16px; border-radius: 16px; text-decoration: none; font-weight: 500; font-size: 13px; transition: all 0.2s ease;"
                                   onmouseover="this.style.backgroundColor='#e2e8f0'; this.style.transform='translateY(-1px)'"
                                   onmouseout="this.style.backgroundColor='#edf2f7'; this.style.transform='translateY(0)'">
                                    {{ $area->nombre }}
                                </a>
                            @endforeach
                        </div>
                    </div>
                @endif
            </main>
        </div>
    </div>
</div>

<!-- Carousel de recursos -->
<div class="resources-carousel">
    <div class="carousel-container">
        <div class="carousel-header">
            <h3>Recursos y Documentación</h3>
            <p>Accede a los documentos oficiales y recursos importantes</p>
        </div>
        
        <div class="carousel-wrapper">
            <div class="carousel-track" id="carouselTrack">
                <!-- Slide 1 -->
                <div class="carousel-slide">
                    <div class="resource-card">
                        <div class="resource-icon">
                            <i class="fas fa-file-pdf"></i>
                        </div>
                        <h4>Manual de Organización</h4>
                        <p>Documento que detalla la estructura organizacional y funciones de cada área.</p>
                        <a href="#" class="resource-btn">
                            <i class="fas fa-download"></i>
                            Descargar PDF
                        </a>
                    </div>
                    <div class="resource-card">
                        <div class="resource-icon">
                            <i class="fas fa-sitemap"></i>
                        </div>
                        <h4>Organigrama General</h4>
                        <p>Representación gráfica de la estructura jerárquica de la dirección.</p>
                        <a href="#" class="resource-btn">
                            <i class="fas fa-eye"></i>
                            Ver Documento
                        </a>
                    </div>
                    <div class="resource-card">
                        <div class="resource-icon">
                            <i class="fas fa-users"></i>
                        </div>
                        <h4>Directorio de Personal</h4>
                        <p>Lista actualizada de funcionarios y personal de contacto por área.</p>
                        <a href="#" class="resource-btn">
                            <i class="fas fa-address-book"></i>
                            Ver Directorio
                        </a>
                    </div>
                </div>
                
                <!-- Slide 2 -->
                <div class="carousel-slide">
                    <div class="resource-card">
                        <div class="resource-icon">
                            <i class="fas fa-clipboard-list"></i>
                        </div>
                        <h4>Procedimientos</h4>
                        <p>Guía de procedimientos administrativos y procesos internos.</p>
                        <a href="#" class="resource-btn">
                            <i class="fas fa-download"></i>
                            Descargar Guía
                        </a>
                    </div>
                    <div class="resource-card">
                        <div class="resource-icon">
                            <i class="fas fa-balance-scale"></i>
                        </div>
                        <h4>Marco Normativo</h4>
                        <p>Normativas y reglamentos que rigen el funcionamiento institucional.</p>
                        <a href="#" class="resource-btn">
                            <i class="fas fa-book"></i>
                            Ver Normativas
                        </a>
                    </div>
                    <div class="resource-card">
                        <div class="resource-icon">
                            <i class="fas fa-calendar-alt"></i>
                        </div>
                        <h4>Cronograma Anual</h4>
                        <p>Planificación anual de actividades y eventos institucionales.</p>
                        <a href="#" class="resource-btn">
                            <i class="fas fa-calendar"></i>
                            Ver Cronograma
                        </a>
                    </div>
                </div>
                
                <!-- Slide 3 -->
                <div class="carousel-slide">
                    <div class="resource-card">
                        <div class="resource-icon">
                            <i class="fas fa-phone"></i>
                        </div>
                        <h4>Contacto Institucional</h4>
                        <p>Información de contacto y canales de comunicación oficial.</p>
                        <a href="#" class="resource-btn">
                            <i class="fas fa-address-card"></i>
                            Ver Contactos
                        </a>
                    </div>
                    <div class="resource-card">
                        <div class="resource-icon">
                            <i class="fas fa-map-marked-alt"></i>
                        </div>
                        <h4>Ubicación y Sedes</h4>
                        <p>Mapa y direcciones de las diferentes sedes y oficinas.</p>
                        <a href="#" class="resource-btn">
                            <i class="fas fa-map"></i>
                            Ver Ubicaciones
                        </a>
                    </div>
                    <div class="resource-card">
                        <div class="resource-icon">
                            <i class="fas fa-question-circle"></i>
                        </div>
                        <h4>Preguntas Frecuentes</h4>
                        <p>Respuestas a las consultas más comunes de los usuarios.</p>
                        <a href="#" class="resource-btn">
                            <i class="fas fa-question"></i>
                            Ver FAQ
                        </a>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="carousel-indicators">
            <div class="indicator active" onclick="goToSlide(0)"></div>
            <div class="indicator" onclick="goToSlide(1)"></div>
            <div class="indicator" onclick="goToSlide(2)"></div>
        </div>
    </div>
</div>

<!-- Modal para imagen organigrama -->
<div id="imageModal" style="position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0,0,0,0.8); display: none; z-index: 1000; align-items: center; justify-content: center; padding: 20px;" onclick="closeModal()">
    <div style="position: relative; max-width: 90%; max-height: 90%;" onclick="event.stopPropagation()">
        <button onclick="closeModal()" style="position: absolute; top: -16px; right: -16px; background: white; border: none; border-radius: 50%; width: 32px; height: 32px; cursor: pointer; box-shadow: 0 2px 8px rgba(0,0,0,0.2); display: flex; align-items: center; justify-content: center; font-size: 14px;">
            <i class="fas fa-times" style="color: #2d3748;"></i>
        </button>
        <img id="modalImage" src="" alt="Organigrama" style="max-width: 100%; max-height: 100%; border-radius: 8px; box-shadow: 0 8px 24px rgba(0,0,0,0.2);">
    </div>
</div>

<script>
// Carousel functionality
let currentSlide = 0;
const totalSlides = 3;
const track = document.getElementById('carouselTrack');
const indicators = document.querySelectorAll('.indicator');

function updateCarousel() {
    track.style.transform = `translateX(-${currentSlide * 100}%)`;
    
    indicators.forEach((indicator, index) => {
        indicator.classList.toggle('active', index === currentSlide);
    });
}

function nextSlide() {
    currentSlide = (currentSlide + 1) % totalSlides;
    updateCarousel();
}

function goToSlide(slideIndex) {
    currentSlide = slideIndex;
    updateCarousel();
}

// Auto-advance carousel
setInterval(nextSlide, 4000);

// Modal functionality
function openModal(src) {
    document.getElementById('modalImage').src = src;
    const modal = document.getElementById('imageModal');
    modal.style.display = 'flex';
    document.body.style.overflow = 'hidden';
}

function closeModal() {
    document.getElementById('imageModal').style.display = 'none';
    document.body.style.overflow = 'auto';
}

// Cerrar modal con tecla ESC
document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape') {
        closeModal();
    }
});
</script>

@endsection
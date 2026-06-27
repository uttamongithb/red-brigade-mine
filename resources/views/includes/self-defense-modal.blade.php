<div class="modal fade rb-program-modal" id="selfDefenseModal" tabindex="-1" role="dialog" aria-labelledby="selfDefenseModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content rb-program-modal-content">
            <button type="button" class="rb-close-btn" data-bs-dismiss="modal" data-dismiss="modal" aria-label="Close popup">
                <span aria-hidden="true">&times;</span>
            </button>
            <div class="row g-0 rb-program-modal-row">
                <div class="col-md-5 rb-program-image-col">
                    <img
                        src="<?php echo asset('uploads/slider/Redbrigade-lucknow-428.jpeg')?>"
                        alt="Girls self-defense training session"
                        class="rb-program-image"
                        onerror="this.onerror=null;this.src='<?php echo asset('uploads/img/404.png')?>';"
                    >
                </div>
                <div class="col-md-7 rb-program-content-col">
                    <span class="rb-event-badge">EVENT</span>
                    <h2 id="selfDefenseModalLabel" class="rb-program-title">Self Defense Training Program</h2>
                    <h3 class="rb-program-subtitle">Empowering Girls Against Sexual Violence</h3>
                    <p class="rb-program-description">
                        Join our training sessions to learn awareness, safety techniques, and build confidence.
                    </p>
                    <div class="rb-program-meta">
                        <span class="rb-date-badge">Ongoing Program</span>
                    </div>
                    <a href="<?php echo action('MainController@contact')?>" class="rb-join-now" aria-label="Join the self defense training program">Join Now</a>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.rb-program-modal .modal-dialog {
    width: 76vw;
    max-width: 76vw;
    margin: 0 auto;
    float: none;
}

.rb-program-modal.show {
    display: flex !important;
    align-items: center;
    justify-content: center;
    min-height: 100vh;
    padding: 0 !important;
}

.rb-program-modal.fade .modal-dialog,
.rb-program-modal.show .modal-dialog {
    transform: none !important;
}

.rb-program-modal-content {
    border: 0;
    border-radius: 15px;
    height: 85vh;
    max-height: 85vh;
    overflow: hidden;
    box-shadow: 0 18px 48px rgba(0, 0, 0, 0.3);
    background: #ffffff;
    transform: translateY(18px);
    opacity: 0;
    transition: transform 0.35s ease, opacity 0.35s ease;
}

.rb-program-modal.show .rb-program-modal-content {
    transform: translateY(0);
    opacity: 1;
}

.rb-close-btn {
    position: absolute;
    top: 12px;
    right: 12px;
    z-index: 3;
    width: 42px;
    height: 42px;
    min-width: 42px;
    min-height: 42px;
    border: 0;
    border-radius: 50%;
    background: rgba(0, 0, 0, 0.72);
    color: #ffffff;
    font-size: 30px;
    line-height: 1;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    transition: background-color 0.25s ease, transform 0.2s ease;
}

.rb-close-btn:hover,
.rb-close-btn:focus {
    background: #E63946;
    transform: scale(1.05);
    outline: none;
}

.rb-program-modal-row {
    height: 100%;
}

.rb-program-image-col {
    background: #ffffff;
}

.rb-program-image {
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
}

.rb-program-content-col {
    background: linear-gradient(135deg, #1D3557 0%, #1f2a44 45%, #191717 100%);
    color: #ffffff;
    padding: 34px 30px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    overflow: hidden;
}

.rb-event-badge {
    display: inline-block;
    width: fit-content;
    background: #FF7F02;
    color: #ffffff;
    font-weight: 700;
    letter-spacing: 0.5px;
    font-size: 12px;
    border-radius: 20px;
    padding: 6px 12px;
    margin-bottom: 14px;
}

.rb-program-title {
    font-size: 30px;
    line-height: 1.2;
    margin: 0 0 10px;
    font-weight: 700;
    color: #ffffff;
}

.rb-program-subtitle {
    font-size: 20px;
    line-height: 1.4;
    margin: 0 0 14px;
    font-weight: 600;
    color: rgba(255, 255, 255, 0.95);
}

.rb-program-description {
    margin: 0;
    font-size: 16px;
    line-height: 1.65;
    color: rgba(255, 255, 255, 0.92);
}

.rb-program-meta {
    margin-top: 16px;
}

.rb-date-badge {
    display: inline-block;
    border: 1px solid rgba(255, 255, 255, 0.55);
    background: rgba(255, 255, 255, 0.1);
    border-radius: 20px;
    padding: 6px 12px;
    font-size: 13px;
    font-weight: 600;
}

.rb-join-now {
    margin-top: 22px;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: fit-content;
    padding: 10px 24px;
    border-radius: 25px;
    background: #E63946;
    color: #ffffff;
    text-decoration: none;
    font-weight: 700;
    box-shadow: 0 6px 16px rgba(230, 57, 70, 0.35);
    transition: background-color 0.25s ease, transform 0.2s ease, box-shadow 0.25s ease;
}

.rb-join-now:hover,
.rb-join-now:focus {
    background: #c82333;
    color: #ffffff;
    text-decoration: none;
    transform: translateY(-1px);
    box-shadow: 0 8px 18px rgba(200, 35, 51, 0.4);
}

.rb-program-modal {
    z-index: 1050000 !important;
}

.modal-backdrop {
    z-index: 1049990 !important;
}

.modal-backdrop.show {
    opacity: 0.6;
}

@media (max-width: 991px) {
    .rb-program-modal .modal-dialog {
        width: 88vw;
        max-width: 88vw;
        margin: 0 auto;
    }

    .rb-program-modal-content {
        height: 82vh;
    }

    .rb-program-modal-row,
    .rb-program-image {
        height: 100%;
    }

    .rb-program-content-col {
        padding: 24px 20px 26px;
    }

    .rb-program-title {
        font-size: 25px;
    }

    .rb-program-subtitle {
        font-size: 18px;
    }
}

@media (max-width: 575px) {
    .rb-program-modal .modal-dialog {
        width: 94vw;
        max-width: 94vw;
        margin: 0 auto;
    }

    .rb-program-modal-content {
        height: 88vh;
    }

    .rb-close-btn {
        top: 14px;
        right: 14px;
        background: rgba(0, 0, 0, 0.84);
        box-shadow: 0 6px 16px rgba(0, 0, 0, 0.28);
    }

    .rb-program-modal-row {
        height: 100%;
    }

    .rb-program-image {
        min-height: 34vh;
        height: 34vh;
    }

    .rb-program-title {
        font-size: 22px;
    }

    .rb-program-subtitle {
        font-size: 16px;
    }

    .rb-program-description {
        font-size: 14px;
    }
}
</style>

<script>
(function () {
    var modalId = 'selfDefenseModal';
    var showDelay = 2000;
    var storageKey = 'rb_modal_shown'; // Key to track if modal was shown in this session

    function hideModal(modalElement) {
        modalElement.classList.remove('show');
        modalElement.style.display = 'none';
        modalElement.setAttribute('aria-hidden', 'true');

        var existingBackdrop = document.querySelector('[data-rb-modal-backdrop="selfDefenseModal"]');
        if (existingBackdrop && existingBackdrop.parentNode) {
            existingBackdrop.parentNode.removeChild(existingBackdrop);
        }
    }

    function runModal() {
        // Check if modal was already shown in this session to prevent re-appearance during navigation
        if (sessionStorage.getItem(storageKey)) {
            return;
        }

        var modalElement = document.getElementById(modalId);
        if (!modalElement) {
            return;
        }

        // Set the flag immediately so it doesn't trigger on multiple simultaneous page loads if they occur
        sessionStorage.setItem(storageKey, 'true');

        if (window.bootstrap && typeof window.bootstrap.Modal === 'function') {
            var bs5Modal = new window.bootstrap.Modal(modalElement, {
                backdrop: true,
                keyboard: true
            });

            setTimeout(function () {
                bs5Modal.show();
            }, showDelay);
            return;
        }

        if (window.jQuery && typeof window.jQuery.fn.modal === 'function') {
            var $modal = window.jQuery(modalElement);
            setTimeout(function () {
                $modal.modal('show');
            }, showDelay);
            return;
        }

        setTimeout(function () {
            modalElement.style.display = 'block';
            modalElement.classList.add('show');
            modalElement.setAttribute('aria-hidden', 'false');

            var backdrop = document.createElement('div');
            backdrop.className = 'modal-backdrop fade show';
            backdrop.setAttribute('data-rb-modal-backdrop', 'selfDefenseModal');
            document.body.appendChild(backdrop);

            var closeButtons = modalElement.querySelectorAll('[data-dismiss="modal"], [data-bs-dismiss="modal"]');
            for (var i = 0; i < closeButtons.length; i++) {
                closeButtons[i].onclick = function () {
                    hideModal(modalElement);
                };
            }
        }, showDelay);
    }

    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', function () {
            runModal();
        });
    } else {
        runModal();
    }
})();
</script>

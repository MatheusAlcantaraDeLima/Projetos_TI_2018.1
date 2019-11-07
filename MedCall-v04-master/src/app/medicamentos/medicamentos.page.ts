import { Component, OnInit } from '@angular/core';
import { MedicamentosmPage } from '../medicamentosm/medicamentosm.page';
import { ModalController } from '@ionic/angular';

@Component({
  selector: 'app-medicamentos',
  templateUrl: './medicamentos.page.html',
  styleUrls: ['./medicamentos.page.scss'],
})
export class MedicamentosPage implements OnInit {

    constructor(
      private modalCtrl: ModalController
    ) {}
  
    async openMedicamentosm() {
      const modal = await this.modalCtrl.create({
        component: MedicamentosmPage
      });
      modal.present();
    }
  
    ngOnInit() {
    }
  
  }
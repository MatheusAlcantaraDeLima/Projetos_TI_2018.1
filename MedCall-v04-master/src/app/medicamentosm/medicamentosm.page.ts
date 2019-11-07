import { Component, OnInit } from '@angular/core';
import { ModalController } from '@ionic/angular';

@Component({
  selector: 'app-medicamentosm',
  templateUrl: './medicamentosm.page.html',
  styleUrls: ['./medicamentosm.page.scss'],
})
export class MedicamentosmPage implements OnInit {


  constructor(
    private modalCtrl: ModalController
  ) { }

  ngOnInit() {
  }

    fechar() {
      this.modalCtrl.dismiss();
    }

  }
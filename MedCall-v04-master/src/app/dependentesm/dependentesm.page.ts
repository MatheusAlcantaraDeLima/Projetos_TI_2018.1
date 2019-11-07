import { Component } from '@angular/core';
import { ModalController } from '@ionic/angular';

@Component({
  selector: 'app-dependentesm',
  templateUrl: './dependentesm.page.html',
  styleUrls: ['./dependentesm.page.scss'],
})
export class DependentesmPage{

  constructor(
    private modalCtrl: ModalController
  ) { }

  fechar() {
    this.modalCtrl.dismiss();
  }

}
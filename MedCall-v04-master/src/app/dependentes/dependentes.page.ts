import { Component, OnInit } from '@angular/core';
import { ModalController } from '@ionic/angular';
import { DependentesmPage } from '../dependentesm/dependentesm.page';

@Component({
  selector: 'app-dependentes',
  templateUrl: './dependentes.page.html',
  styleUrls: ['./dependentes.page.scss'],
})
export class DependentesPage implements OnInit {

  constructor(
    private modalCtrl: ModalController
  ) {}

  async openDependentesm() {
    const modal = await this.modalCtrl.create({
      component: DependentesmPage
    });
    modal.present();
  }

  ngOnInit() {
  }

}

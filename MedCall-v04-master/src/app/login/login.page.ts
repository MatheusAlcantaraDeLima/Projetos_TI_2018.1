import { Component, OnInit } from '@angular/core';
import { RegistroPage } from '../registro/registro.page';
import { ModalController } from '@ionic/angular';

@Component({
  selector: 'app-login',
  templateUrl: './login.page.html',
  styleUrls: ['./login.page.scss'],
})
export class LoginPage implements OnInit {

  constructor(
    private modalCtrl: ModalController
  ) {}

  async openRegistro(){
    const modal = await this.modalCtrl.create({
      component: RegistroPage
    });
    modal.present();
  }
  ngOnInit() {
  }

}

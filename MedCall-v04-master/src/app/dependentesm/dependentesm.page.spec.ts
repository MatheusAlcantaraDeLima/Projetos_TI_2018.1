import { CUSTOM_ELEMENTS_SCHEMA } from '@angular/core';
import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { DependentesmPage } from './dependentesm.page';

describe('DependentesmPage', () => {
  let component: DependentesmPage;
  let fixture: ComponentFixture<DependentesmPage>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ DependentesmPage ],
      schemas: [CUSTOM_ELEMENTS_SCHEMA],
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(DependentesmPage);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});

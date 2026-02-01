define(function () {
    'use strict';

    var mixin = {
        /**
         * Mixin: now scrolls error into view
         *
         * Tries to set focus on first invalid form field.
         *
         * @returns {Object}
         */
        focusInvalid: function () {
            var invalidField = _.find(this.delegate('checkInvalid'));

            if (!_.isUndefined(invalidField) && _.isFunction(invalidField.focused)) {
                invalidField.focused(true);

                document.querySelector('#error-message-tooltip').scrollIntoView({
                    behavior: 'smooth'
                });
            }

            return this;
        }
    };

    return function (target) {
        return target.extend(mixin);
    };
});
